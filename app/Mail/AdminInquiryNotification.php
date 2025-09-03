<?php

// app/Mail/AdminInquiryNotification.php
namespace App\Mail;

use App\Models\Question;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminInquiryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Question $question) {}

    public function build()
    {
        $name = trim($this->question->first_name . ' ' . $this->question->last_name);
        $subject = $name
            ? "{$name} – Neue Anfrage über das Kontaktformular"
            : "Neue Anfrage über das Kontaktformular";
        return $this
            ->from(config('mail.from.address'), 'DalAs Website') 
            ->replyTo($this->question->email, $name)
            ->subject($subject)
            ->markdown('emails.admin-inquiry', ['q' => $this->question]);
    }
}
