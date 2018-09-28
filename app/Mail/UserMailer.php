<?php
namespace App\Mailer;

class UserMailer  extends Mailer
{
    /**
     * 用户注册时发送邮件通知
     */
    public function register($user)
    {
        $data = [
            'username' => '二狗子',
        ];
        $subject = 'user register subject';
        $view = 'emails.user.register';

        $this->sendTo($user, $subject, $view, $data);
    }
}
