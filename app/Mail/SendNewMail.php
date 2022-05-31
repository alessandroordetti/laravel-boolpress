<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $author;
    protected $sender;
    protected $guestMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $sender, $guestMessage)
    {
        $this->author = $author;
        $this->sender = $sender;
        $this->guestMessage = $guestMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->author)->view('email.body', ["author" => $this->author, "sender" => $this->sender, "guestMessage" => $this->guestMessage]);
    }
}
