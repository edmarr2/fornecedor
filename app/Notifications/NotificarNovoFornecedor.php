<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificarNovoFornecedor extends Notification
{
    use Queueable;
    public $fornecedor;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Seja bem-vindo ao ' . config('app.name'))
                    ->line('Bem vindo.')
                    ->action('Clique aqui para acessar seu login', url('/login'))
                    ->line('Obrigado!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
