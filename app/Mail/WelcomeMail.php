<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $totalPoints;
    /**
     * Create a new message instance.
     */
    public function __construct($user, $totalPoints)
    {
        $this->user = $user;
        $this->totalPoints = $totalPoints;
    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome')
                    ->with([
                        'name' => $this->user->name,
                        'totalPoints' => $this->totalPoints,
                    ]);
    }
}
