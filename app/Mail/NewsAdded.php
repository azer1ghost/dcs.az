<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsAdded extends Mailable
{
    use Queueable, SerializesModels;


    public $token;

    public $lang;


    /**
     * Create a new message instance.
     *
     * @param $token
     * @param $lang
     */
    public function __construct($token, $lang)
    {
        $this->token = $token;
        $this->lang = $lang;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.news')
                    ->with([
                            'token' => $this->token,
                            'lang' => $this->lang ,
                        ]);;
    }
}










