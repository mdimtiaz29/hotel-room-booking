<?php

namespace App\Mail;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Verifyuser extends Mailable
{
    use Queueable, SerializesModels;
public $link;

public function __construct($link)
{
    $this->link = $link;
}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User-Verification',
        );
    }



    /**
     * Get the message content definition.
     */
    public function content(): Content
{
    return new Content(
        view: 'user-verification',
        with: [
            'link' => $this->link
        ]
    );
}

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
