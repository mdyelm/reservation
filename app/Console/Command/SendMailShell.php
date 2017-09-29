<?php

Configure::write('Cache.disable', true);

class SendMailShell extends AppShell {

    public $uses = array('User');

    public function startup() {
        parent::startup();
    }

    public function main() {
        $data = $this->args[0];
        $data = json_decode(base64_decode($data), true);
        if (isset($data['email'])) {
            //send mail to user submit form
            $data['pick_date_time'] = $this->_date_format($data['pick_date'], $data['pick_time']);
            $this->_send_mail('【bellFace】サービス体験予約を承りました', $data['email'], 'to_submit_a03', $data);
            //send mail to admin
            $email_admin = Configure::read('email_admin');
            $this->_send_mail('ベルフェイスの体験予約を承りました', $email_admin, 'to_admin', $data);
        }
        die;
    }

}
