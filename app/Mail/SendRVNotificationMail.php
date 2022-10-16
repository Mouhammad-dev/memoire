<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRVNotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $date, $heure, $reunionId;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($date, $heure, $reunionId)
    {
        $date = $this->date;
        $heure = $this->heure;
        $reunionId = $this->$reunionId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.send-r-v-notification-mail', ['date' => $this->date, 'heure' => $this->heure, 'reunionId' => $this->reunionId])->subject("Notification pour votre rendez-vous");
    }
}
