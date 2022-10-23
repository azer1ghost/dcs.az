<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactForm extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public array $validated)
    {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Movzu: '. $this->validated['subject'])
                    ->line('Email: '. $this->validated['email'])
                    ->line('Mesaj: '. $this->validated['message']);
    }
}
