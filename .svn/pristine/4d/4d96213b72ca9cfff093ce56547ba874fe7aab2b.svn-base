<?php

/**
 * AppShell file
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
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Shell', 'Console');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class AppShell extends Shell {

    protected function _send_mail($title, $email, $view, $data = array()) {
        $Email = new CakeEmail();
        try {
            $return = $Email->config('gmail')
                    ->emailFormat('html')
                    ->to($email)
                    ->template($view)
                    ->subject($title)
                    ->viewVars(array('data' => $data))
                    ->from('ernie.analytics@gmail.com', 'ベルフェイス株式会社')
                    ->send();
            return $return;
        } catch (Exception $e) {
            return false;
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
