<?php

// app/Mail/UserInquiryConfirmation.php
namespace App\Mail;
use App\Models\Question;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserInquiryConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct(public Question $question) {}
    public function build() {
        return $this->subject('Bestätigung Ihrer Anfrage')
            ->markdown('emails.user-inquiry', ['q' => $this->question]);
    }
}
