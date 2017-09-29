<?php

Configure::write('Cache.disable', true);

class CronSendMailShell extends AppShell {

    public $uses = array('User', 'UserFree');

    public function startup() {
        parent::startup();
    }

    public function main() {
        date_default_timezone_set('Asia/Tokyo');
        $time = date('H:i:00', time());
        $users = $this->User->find('all', array(
            'fields' => array(
                'User.id',
                'User.email',
                'User.name',
                'User.reservation_phone_number',
                'User.pick_date',
                'User.pick_time',
            ),
            'conditions' => array(
                'User.pick_date = CURDATE()',
                'date(User.time) != CURDATE()',
                'User.send_flg' => 0,
                'User.company_name IS NOT NULL',
                'User.name IS NOT NULL',
                'User.reservation_phone_number IS NOT NULL',
                'User.pick_date IS NOT NULL',
                'User.pick_time IS NOT NULL',
            ),
        ));

        foreach ($users as $user) {
            $pick_time = explode('-', $user['User']['pick_time']);
            if (isset($pick_time[0])) {
                $diff = strtotime($pick_time[0] . ':00') - strtotime($time);
                if ($diff <= 1800 && $diff >= 0) {
                    $user['User']['pick_date_time'] = $this->_date_format($user['User']['pick_date'], $user['User']['pick_time']);
                    if ($this->_send_mail('ベルフェイス体験、本日' . $pick_time[0] . '時より', $user['User']['email'], 'cron_to_submit', $user['User'])) {
                        //update user send_flg
                        $this->User->UpdateAll(
                                array(
                            'send_flg' => "'1'",
                                ), array(
                            'id' => $user['User']['id']
                                )
                        );
                    }
                }
            }
        }

        $users = $this->UserFree->find('all', array(
            'fields' => array(
                'UserFree.id',
                'UserFree.email',
                'UserFree.name',
                'UserFree.reservation_phone_number',
                'UserFree.pick_date',
                'UserFree.pick_time',
            ),
            'conditions' => array(
                'UserFree.pick_date = CURDATE()',
                'date(UserFree.time) != CURDATE()',
                'UserFree.send_flg' => 0,
                'UserFree.company_name IS NOT NULL',
                'UserFree.name IS NOT NULL',
                'UserFree.reservation_phone_number IS NOT NULL',
                'UserFree.pick_date IS NOT NULL',
                'UserFree.pick_time IS NOT NULL',
            ),
        ));
        foreach ($users as $user) {
            $pick_time = explode('-', $user['UserFree']['pick_time']);
            if (isset($pick_time[0])) {
                $diff = strtotime($pick_time[0] . ':00') - strtotime($time);
                if ($diff <= 1800 && $diff >= 0) {
                    $user['UserFree']['pick_date_time'] = $this->_date_format($user['UserFree']['pick_date'], $user['UserFree']['pick_time']);
                    if ($this->_send_mail('ベルフェイス体験、本日' . $pick_time[0] . '時より', $user['UserFree']['email'], 'cron_to_submit', $user['UserFree'])) {
                        //update user send_flg
                        $this->UserFree->UpdateAll(
                                array(
                            'send_flg' => "'1'",
                                ), array(
                            'id' => $user['UserFree']['id']
                                )
                        );
                    }
                }
            }
        }

        die;
    }

}
