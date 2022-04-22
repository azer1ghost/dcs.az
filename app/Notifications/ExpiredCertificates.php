<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ExpiredCertificates extends Notification
{
    use Queueable;

    private string $count;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->count = $count;
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
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Bəzi sertifikatlarin müddəti bitir')
                    ->greeting('Salam')
                    ->line("{$this->count} ədəd sertifikatın müddətinin bitməsinə bir neçə gün qalıb.")
                    ->action('Sertifikatlara bax', route('voyager.certificates.index'))
                    ->line('Xoş günlər!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
