<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    public function __construct($candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        return $this->subject('Nouvelle Candidature Reçue')
                    ->view('emails.candidature_submitted');
    }
}
