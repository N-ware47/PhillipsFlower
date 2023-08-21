<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $OrderMailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($OrderMailData)
    {
        $this->OrderMailData = $OrderMailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //  return $this->view('email.mail');
        return $this->subject('OrderEmail')->view('email.mail');
    }
}
