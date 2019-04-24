<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class MailResetPasswordNotification extends Notification
{
    use Queueable;

    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail()
    {
        $link = url("/password/reset/" . $this->token);

        return (new MailMessage)
            ->view('mail.reset', ["link" => $link])
            ->from("no-reply@techweek.fatec.sp.gov.br", "Techweek")
            ->subject('Recuperação de Senha');
    }
}
