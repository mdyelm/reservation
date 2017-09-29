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
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public function beforeRender() {
        parent::beforeRender();
        $this->layout = 'layout';
        $this->set('activeNav', $this->params['controller']);
        $this->set('activeNav2', $this->params['action']);
    }

    public function randomcode($len = 8) {
        $lchar = '';
        $textcode = Null;
        $code = NULL;
        for ($i = 0; $i < $len; $i++) {
            $char = chr(rand(48, 122));

            while (!mb_ereg("[a-zA-Z0-9]", $char)) {
                if ($char == $lchar) {
                    continue;
                }
                $char = chr(rand(48, 90));
            }
            $textcode .= $char;
            $lchar = $char;
        }

        return $textcode;
    }

    public function send_mail($title, $email, $view, $data = array()) {
        $Email = new CakeEmail();
        $return = $Email->config('gmail')
                ->emailFormat('html')
                ->to($email)
                ->template($view)
                ->subject($title)
                ->viewVars(array('data' => $data))
                ->from('info@bell-face.com', 'ベルフェイス株式会社')
                ->send();
        return $return;
    }

}
