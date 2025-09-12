<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\URL;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkWithUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $messageContent)
    {
        $this->user = $user;
        $this->messageContent = $messageContent;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
          from: new Address($this->user->email, $this->user->name),
          subject: 'Nuova proposta',
        );
    }

    public function build ()
    {
        $signedUrl = URL::signedRoute('make.revisor', ['email' => $this->user->email]);

        return $this->subject('Richiesta ruolo revisore')->view('mails.workwithus', [
            'user' => $this->user,
            'messageContent' => $this->messageContent,
            'signedUrl' => $signedUrl,
        ]);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.workwithus',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
