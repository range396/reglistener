<?php

namespace Range396\Mailing;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class RegMailSending extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('welcome-email')
            ->subject('Welcome to YourApp');
    }

}