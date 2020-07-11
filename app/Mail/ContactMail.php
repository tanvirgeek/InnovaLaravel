<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $senderAddress;
    public $senderMessage;
    public $senderName;

    /**
     * Create a new message instance.
     *
     * @param $senderName
     * @param $fromAddress
     * @param $message
     * @internal param $from
     */
    public function __construct($senderName, $fromAddress, $message)
    {
        $this->$senderName      = ucfirst($senderName);
        $this->senderAddress    = $fromAddress;
        $this->senderMessage    = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('info.innovaepc@gmail.com')
            ->subject('Innovamep Customer Email')
            ->from($this->senderAddress, $this->senderName)
            ->replyTo($this->senderAddress)
            ->view('mail-template');
    }
}
