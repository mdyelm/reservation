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
App::uses('Holidays', 'Lib');

class TrialController extends AppController {

    public $components = array('Flash', 'Session', 'Auth');

    public function beforeRender() {
        parent::beforeRender();
        $this->layout = 'layout';
    }

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public function index() {
        $this->set('title', '無料アカウントの登録');

        // set referer params
        if (isset($this->params->query["from"])) {
            $this->set('from', $this->params->query['from']);
        }
    }

    public function b02() {
//        include APP . 'language.php';
        $this->loadModel('UserFree');
        $this->set('title', '本登録を完了してください');

        // set referer params
        if (isset($this->params->query["from"])) {
            $this->set('from', $this->params->query['from']);
        }

        if ($this->request->is('post')) {
            if (isset($this->request->data['email'])) {
                $email = $this->request->data['email'];
                $timeCre = date('Y-m-d H:i:s', time());
                $this->request->data['time'] = $timeCre;
                $this->UserFree->save($this->request->data);
                $id = $this->UserFree->getLastInsertId();
                $this->set('id', $id);
                $this->set('email', $email);
            } else {
                return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
            }
        } else {
            return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
        }
    }

    public function b03() {
        $this->loadModel('UserFree');
        $this->set('title', '無料アカウント登録申請を受け付けました');
        if ($this->request->is('post')) {
            if (isset($this->request->data['id'])) {

                $browserAgent = $_SERVER['HTTP_USER_AGENT'];
                $ipClient = $this->request->clientIp();
                $timeRequest = date('Y年m月d日 H:i:s', time());

                if (isset($_SERVER['HTTP_REFERER'])) {
                    $source = $_SERVER['HTTP_REFERER'];
                } else {
                    $source = '';
                }

                $params = $this->request->data;
                $company_name = $params['company_name'];
                $name = $params['name'];
                $phone_number = $params['phone_number'];
                $this->UserFree->UpdateAll(
                        array(
                    'company_name' => "'$company_name'",
                    'name' => "'$name'",
                    'phone_number' => "'$phone_number'",
                    'reservation_phone_number' => "'$phone_number'"
                        ), array(
                    'id' => $params['id']
                        )
                );

                //send mail 
                $dataSendMail = array(
                    'email' => $params['email'],
                    'name' => $name,
                    'company_name' => $company_name,
                    'phone_number' => $phone_number,
                    'browser_agent' => $browserAgent,
                    'ip_client' => $ipClient,
                    'time_request' => $timeRequest,
                    'source' => $source
                );
                $shell = Configure::read('Shell.SendMailB02') . ' ' . base64_encode(json_encode($dataSendMail));
//                shell_exec($shell);
                shell_exec($shell . ' > /dev/null 2>/dev/null &');


                $this->set('id', $params['id']);
                $this->set('email', $params['email']);
                $this->set('company_name', $company_name);
                $this->set('name', $name);
                $this->set('phone_number', $phone_number);
                $this->set('reservation_phone_number', $phone_number);
//                $this->request->data['reservation_phone_number'] = $phone_number;

                $today = date('Y-m-d', time());

                $holiday = new Holidays();
                $disable = $holiday->from(new DateTime($today));
                if (is_array($disable) && count($disable)) {
                    $disable = '"' . implode('","', $disable) . '"';
                } else {
                    $disable = '';
                }
                $this->set('disable', $disable);
            } else {
                return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
            }
        } else {
            return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
        }
    }

    public function b04() {
        $this->loadModel('UserFree');
        $this->set('title', 'ベルフェイス体験予約ありがとうございました');
        if ($this->request->is('post')) {
            $browserAgent = $_SERVER['HTTP_USER_AGENT'];
            $ipClient = $this->request->clientIp();
            $timeRequest = date('Y年m月d日 H:i:s', time());

            if (isset($this->request->data['email'])) {
                $params = $this->request->data;
                if (empty($params['pick_date']) || empty($params['pick_time']) || empty($params['reservation_phone_number'])) {
                    if (empty($params['pick_date']) || empty($params['pick_time'])) {
                        $this->Flash->error('* 予約日が正しくありません');
                    } else {
                        $this->Flash->error('* 当日のご連絡先 電話番号が正しくありません');
                    }
                    $this->set('data', $params);
                    $this->set('reservation_phone_number', $params['phone_number']);

                    $today = date('Y-m-d', time());
                    $holiday = new Holidays();
                    $disable = $holiday->from(new DateTime($today));
                    if (is_array($disable) && count($disable)) {
                        $disable = '"' . implode('","', $disable) . '"';
                    } else {
                        $disable = '';
                    }
                    $this->set('disable', $disable);
                    return $this->render('b03');
                }
                //check if exixst on db 
                $check = $this->UserFree->find('first', array(
                    'conditions' => array(
                        'id' => $params['id'],
                        'pick_date IS NOT NULL',
                        'pick_time IS NOT NULL',
                    )
                ));
                if (!$check) {
                    $params['pick_date'] = str_replace('/', '-', $params['pick_date']);
                    $dataSendMail = array(
                        'email' => $params['email'],
                        'name' => $params['name'],
                        'company_name' => $params['company_name'],
                        'reservation_phone_number' => $params['reservation_phone_number'],
                        'pick_date' => $params['pick_date'],
                        'pick_time' => $params['pick_time'],
                        'browser_agent' => $browserAgent,
                        'ip_client' => $ipClient,
                        'time_request' => $timeRequest
                    );
                    $shell = Configure::read('Shell.SendMail') . ' ' . base64_encode(json_encode($dataSendMail));
//                    shell_exec($shell);
                    shell_exec($shell . ' > /dev/null 2>/dev/null &');

                    $pick_date = $params['pick_date'];
                    $pick_time = $params['pick_time'];
                    $reservation_phone_number = $params['reservation_phone_number'];
                    $this->UserFree->UpdateAll(
                            array(
                        'pick_date' => "'$pick_date'",
                        'pick_time' => "'$pick_time'",
                        'reservation_phone_number' => "'$reservation_phone_number'",
                            ), array(
                        'id' => $params['id']
                            )
                    );
                }

                //set param to view a04
                $this->set('pick_date_time', $this->_date_format($params['pick_date'], $params['pick_time']));
                $this->set('phone_number', $params['reservation_phone_number']);
                $this->set('name', $params['name']);
            } else {
                return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
            }
        } else {
            return $this->redirect(array('controller' => 'trial', 'action' => 'index'));
        }
    }

    protected function _date_format($pick_date, $pick_time) {
        $date = new DateTime($pick_date);
        $pick_time = mb_convert_encoding($pick_time, "UTF-8");
        $pick_time = explode('-', $pick_time);
        $day_of_weeks = array("日", "月", "火", "水", "木", "金", "土");
        if (isset($pick_time[0])) {
            $pick_time_start = $pick_time[0];
        } else {
            $pick_time_start = '';
        }
        return $date->format('Y年m月d日') . '(' . $day_of_weeks[$date->format('w')] . ') ' . $pick_time_start;
    }

}
