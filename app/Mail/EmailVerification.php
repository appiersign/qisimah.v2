<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $verification_code;

    /**
     * Create a new message instance.
     *
     * @param $email
     * @param $verification_code
     */
    public function __construct(string $email, string $verification_code)
    {
        $this->email = $email;
        $this->verification_code = $verification_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification_code_email')->with(['email' => $this->email, 'verification_code' => $this->verification_code]);
    }
}
