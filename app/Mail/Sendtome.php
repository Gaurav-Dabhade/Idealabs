<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendtome extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fname, $lname,$email,$pname,$body)
    {
        //
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->pname = $pname;
        $this->body = $body;

    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sendToMe')->subject('Idealabs Enquiry')->with([
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'pname' => $this->pname,
            'body' => $this->body,

        ]);
    }
}
