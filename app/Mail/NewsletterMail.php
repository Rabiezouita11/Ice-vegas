<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $content;
    public $products;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $content, $products)
    {
        $this->subject = $subject;
        $this->content = $content;
        $this->products = $products;
    }

    /**
     * Get the message envelope.
     */
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.newsletter')
                    ->with([
                        'content' => $this->content,
                        'products' => $this->products,
                    ]);
    }
}
