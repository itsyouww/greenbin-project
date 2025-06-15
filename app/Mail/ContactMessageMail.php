<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nama;
    public $email;
    public $pesan;

    public function __construct($nama, $email, $pesan)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->pesan = $pesan;
    }

    public function build()
    {
        return $this->subject('Pesan dari Formulir Kontak')
                    ->view('emails.contact-message');
    }
}

