<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class authemail extends Mailable
{
    use Queueable, SerializesModels;

    public $detail;
    
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    public function build(){
        return $this->subject('Verifikasi Akun anda ')->view('email/verify');
    }

    public function attachments(): array
    {
        return [];
    }
}
