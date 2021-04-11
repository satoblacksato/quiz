<?php

namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageSending extends Mailable
{
    use Queueable, SerializesModels;

    public $body;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $emailId)
    {
        
        $this->email=Email::findOrFail($emailId);
        $this->body=$this->email->body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->email->subject)
            ->markdown('message_sending');
    }
}
