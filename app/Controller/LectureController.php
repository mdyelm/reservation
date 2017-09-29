<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
App::uses('CakeEmail', 'Network/Email');
class LectureController extends AppController
{
    public $components = array('Flash', 'Session','Auth');
    public function beforeRender() {
        parent::beforeRender();
        $this->layout = 'layout';
    }
    public function beforeFilter()
    {
        $this->Auth->allow();
    } 

    public function index()
    {
        $this->set('title', 'レクチャー受付（bellFace）');
        
        // set referer params
		if( isset($this->params->query["from"]) ){
			$this->set('from', $this->params->query['from']);
		}
    }

   
    public function b02()
    {
    	include APP . 'language.php';
    	$this->loadModel('UserFree');
        $this->set('title', 'レクチャー受付を完了してください（bellFace）');
        
         // set referer params
		if( isset($this->params->query["from"]) ){
			$this->set('from', $this->params->query['from']);
		}
		
        if($this->request->is('post')){
            if(isset($this->request->data['email'])){
                $email = $this->request->data['email'];
                // $password =  AuthComponent::password($this->request->data['password']);
                // $conditions = array(
                //     'UserFree.email' => $email,
                // );
                // if ($this->UserFree->hasAny($conditions)) {
                //     $this->Flash->set($english['EMAIL_EXIST']);
                //     return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
                // }else{
                // 	$this->set('email', $email);
                // 	$this->set('password', $password);
                // }
                $timeCre = date('Y-m-d H:i:s',time());
                $this->request->data['time'] = $timeCre;
                $this->UserFree->save($this->request->data);
                $id = $this->UserFree->getLastInsertId();
                $this->set('id', $id);
                $this->set('email', $email);
            }else{
                return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
            }
      
        }else{
            return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
        }
    }
    public function b03()
    {
        $this->loadModel('UserFree');
        $this->set('title', 'レクチャー依頼を受け付けました（bellFace）');
        if($this->request->is('post')){
            $browserAgent = $_SERVER['HTTP_USER_AGENT'];
            $ipClient = $this->request->clientIp();
            $timeRequest = date('Y年m月d日 H:i:s',time());
            if(isset($this->request->data['email'])){
                $params = $this->request->data;

                $message  = 'このメールはシステムより自動的に送信される自動返信メールです。<br>';
                $message .= '----------------------------------------------------------<br>';
                $message .= $params['name'].' 様<br><br>';

                $message .= 'この度はレクチャーのご依頼ありがとうございます。<br>';
                $message .= '内容を確認後、担当者より連絡致しますので今しばらくお待ちくださいませ。<br><br>';

                $message .= '==========================================================<br>';
                $message .= '■お客様情報<br>';
                $message .= '----------------------------------------------------------<br><br>';

                $message .= '【会社名】 '.$params['company_name'].'<br><br>';

                $message .= '【お名前】 '.$params['name'].' 様<br><br>';

                $message .= '【メールアドレス】 '.$params['email'].'<br><br>';

                $message .= '【電話番号】 '.$params['phone_number'].'<br><br>';

                $message .= '==========================================================<br>';
                $message .= 'ベルフェイス株式会社<br>';
                $message .= '<a href="https://bell-face.com/">https://bell-face.com/</a><br>';
                $message .= 'cs@bell-face.com<br><br>';
                
                $messadm = '以下のユーザーからレクチャーの依頼がありました。<br>';
                $messadm .= '対応をお願いします。<br><br>';

                $messadm .= '==========================================================<br>';
                $messadm .= '■お客様情報<br>';
                $messadm .= '----------------------------------------------------------<br><br>';

                $messadm .= '【会社名】 '.$params['company_name'].'<br><br>';

                $messadm .= '【お名前】 '.$params['name'].' 様<br><br>';

                $messadm .= '【メールアドレス】 '.$params['email'].'<br><br>';

                $messadm .= '【電話番号】 '.$params['phone_number'].'<br><br>';

                $messadm .= '==========================================================<br><br>';

                $messadm .= '【送信者情報】<br>';
                $messadm .= '・ブラウザー : '.$browserAgent.'<br>';
                $messadm .= '・送信元IPアドレス: '.$ipClient.'<br>';
                $messadm .= '・送信元ホスト名 : <br>';
                $messadm .= '・送信日時 : '.$timeRequest;

                $Email    = new CakeEmail();
                $Email  ->config('gmail')
                        ->emailFormat('html')
                        ->from('cs@bell-face.com', 'ベルフェイス株式会社')
                        ->to($this->request->data['email'])
                        ->subject('レクチャーの依頼を承りました（ベルフェイス）');

                $EmailAdm   = new CakeEmail();
                $EmailAdm   ->config('gmail')
                            ->emailFormat('html')
                            ->from('cs@bell-face.com', 'ベルフェイス株式会社')
                            ->to(['cs@bell-face.com'])
                            ->subject('レクチャーの依頼を承りました（ベルフェイス）');
                $company_name = $params['company_name'];
                $name = $params['name'];
                $phone_number = $params['phone_number'];
                $this->UserFree->UpdateAll(
                            array(
                                'company_name' => "'$company_name'",
                                'name'         => "'$name'",
                                'phone_number' => "'$phone_number'"
                            ),
                            array(
                                'id'           => $params['id']
                            )
                );
                $Email->send($message);
                $EmailAdm->send($messadm);
            }else{
                return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
            }
      
        }else{
            return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
        }
    }
 
}
