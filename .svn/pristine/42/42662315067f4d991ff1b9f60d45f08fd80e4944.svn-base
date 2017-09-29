<?php
Configure::write('Cache.disable', true);
class SendMailA02Shell extends AppShell {

    public $uses = array('User');

    public function startup() {
        parent::startup();
    }

    public function main() {
        $data = $this->args[0];
        $data = json_decode(base64_decode($data), true);
        if (isset($data['email'])) {
            //send mail to user submit form
            $this->_send_mail('【bellFace】サービス資料のご送付', $data['email'], 'to_submit', $data);
            
            //send mail to admin
            $email_admin = Configure::read('email_admin');
            $this->_send_mail('資料請求を承りました（bellFace）', $email_admin, 'to_admin_a02', $data);
        }
        die;
    }

}
