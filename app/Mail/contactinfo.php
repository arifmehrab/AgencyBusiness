<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactinfo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $msgStore;
    public function __construct($msgStore)
    {
        $this->msgStore = $msgStore;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $msgDetails = $this->msgStore;
        return $this->view('Backend.Admin.mails.contact_info', compact('msgDetails'))->subject('Message From TopUpSoft');
    }
}
