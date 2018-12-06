<?php
/**
 * Created by PhpStorm.
 * User: dmburu
 * Date: 06/12/2018
 * Time: 11:24
 */

namespace App\Http\Controllers\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserActivate extends Notification
{
    use Queueable;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(env('ADMIN_EMAIL'))
            ->subject('Activate Account!')
            ->greeting(sprintf('Hi, %s', $this->user->name))
            ->line('We just noticed that you created a new account. You will need to activate your account to sign in into this account.')
            ->action('Activate', route('activate', [$this->user->token]))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
