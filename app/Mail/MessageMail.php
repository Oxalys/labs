<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;


    public $email;

    /*
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /*
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email->email)
            ->subject($this->email->subject)
            ->view('components.contactMail');
    }
}