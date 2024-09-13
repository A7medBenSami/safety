<?php

namespace App\Mail;

use App\Models\Contact; // Ensure this is correctly imported
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $contact; // Make sure this is public

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('{سالـــة جديـــدة')
                    ->view('emails.contact_created');
    }
}