<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordReset extends Mailable
{
    use Queueable, SerializesModels;

    public $userEmail;
    public $code;

    /**
     * Create a new message instance.
     *
     * @param $userEmail
     */
    public function __construct($userEmail, $code)
    {
        $this->userEmail = $userEmail;
        $this->code      = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Reset Password')->from('mailaddress@gmail.com')->to($this->userEmail)->view('admin.password-reset-mail');
    }
}
