<?php
Configure::write('Cache.disable', true);
class SendMailB02Shell extends AppShell {

    public $uses = array('User');

    public function startup() {
        parent::startup();
    }

    public function main() {
        $data = $this->args[0];
        $data = json_decode(base64_decode($data), true);
        if (isset($data['email'])) {
            //send mail to user submit form
            $this->_send_mail('無料トライアルの申し込みを受付けました（bellFace）', $data['email'], 'to_submit_b02', $data);
            
            //send mail to admin
            $email_admin = Configure::read('email_admin');
            $this->_send_mail('無料トライアルの申し込みを受付けました（bellFace）', $email_admin, 'to_admin_b02', $data);
        }
        die;
    }

}