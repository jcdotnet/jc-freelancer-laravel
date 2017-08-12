<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

	public $data;
	//public $cuerpo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //$this->email = $data['email'];
		$this->data= $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($this->data['email'], $this->data['nombre']) 
		->subject($this->data['asunto'])
		->view('emails.contact');		
    }
}
