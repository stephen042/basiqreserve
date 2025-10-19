<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $body;
    public $link;
    public $transaction;
    public $bankName;

    public function __construct($title, $body, $link, $transaction, $bankName)
    {
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->transaction = $transaction;
        $this->bankName = $bankName;
    }

    public function build()
    {
        return $this->subject($this->title)
                    ->view('mail.appmail');
    }
}
