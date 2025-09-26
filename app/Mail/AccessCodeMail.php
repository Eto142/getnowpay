<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccessCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $accessCode;
    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $accessCode)
    {
        $this->user = $user;
        $this->accessCode = $accessCode;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your 4-Digit Access Code')
                    ->view('emails.access-code');
    }
}
