<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Crypt;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    private string $token;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        // メールアドレスを暗号化（URLに生のメールアドレスを含めるとGoogle Chrome側で危険なサイト扱いされてしまうため）
        //$email = Crypt::encryptString($notifiable->email);

        $url = route('admin.password.reset', [
            'token' => $this->token,
        ]);

        // メール文面の氏名
        //$name = $notifiable->lastname.' '.$notifiable->firstname;

        return (new MailMessage)
            ->subject('[' . config('app.name') . '] パスワードのリセット')
            ->view(['text' => 'admin.mail.passwordreset'], ['reset_url' => $url]);
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
