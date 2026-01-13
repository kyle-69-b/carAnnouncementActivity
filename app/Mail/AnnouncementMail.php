<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AnnouncementMail extends Mailable
{
    use Queueable, SerializesModels;

    // 1. Define a public property so the view can access it
    public $announcement;

    /**
     * 2. Receive the data in the constructor
     */
    public function __construct($announcement)
    {
        $this->announcement = $announcement;
    }

    /**
     * 3. Set the Email Subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Announcement: ' . $this->announcement['title'],
        );
    }

    /**
     * 4. Point to your email template file
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.announcement', // This points to resources/views/emails/announcement.blade.php
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
