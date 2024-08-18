<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SiteFormEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $userInfo;

    public function __construct(array $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    public function build()
    {
        return $this
                ->subject("Website Form Information")
                ->markdown('emails.send');
    }
}
