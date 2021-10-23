<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    public $token;
    private $email;

    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = route('password.reset', ['token'=>$this->token, 'email'=>$this->email]);
        return (new MailMessage)
            ->subject(__('mail.reset.subject'))
            ->view('site.notifications.password_reset', ['url'=>$url]);
    }
}
