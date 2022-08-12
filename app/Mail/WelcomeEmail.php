<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        Log::info('in WelcomeMail contruct-> ' . print_r( $name, true));
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info('in WelcomeMail build-> ' . print_r( $this->name, true));
        return $this->subject('Welcome to The Bylik Group')->view('email.welcome_template')->with([
            'name' => $this->name
        ]);
    }
}
