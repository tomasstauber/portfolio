<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MensajeDeContacto extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $nombre,
        public string $apellido,
        public string $email,
        public string $mensaje,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Portfolio — mensaje de {$this->nombre} {$this->apellido}",
            // Clave: cuando le des "Responder" en Outlook, le contestás
            // directo a la persona y no a onboarding@resend.dev
            replyTo: [
                new Address($this->email, "{$this->nombre} {$this->apellido}"),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contacto');
    }
}