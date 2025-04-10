<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\App;

class InboxMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inbox;

    /**
     * Create a new message instance.
     */
    public function __construct($inbox)
    {
        $this->inbox = $inbox;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $from_address = config('mail.from.address');
        $from_name    = App::make('siteConfigs')['site_name']->value ?? config('mail.from.name');


        return new Envelope(
            from: new Address($from_address, $from_name),
            subject: 'Inbox Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'components.inbox-mail',
            with: [
                'data' => $this->inbox,
            ],
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
