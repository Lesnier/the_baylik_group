<?php

namespace App\Listeners;

use App\Events\UsuarioRegistradoEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UsuarioRegistradoListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UsuarioRegistradoEvent  $event
     * @return void
     */
    public function handle(UsuarioRegistradoEvent $event)
    {
        Log::info('in User Name -> ' . print_r($event->user->name, true));
        Log::info('in Listener-> ' . print_r($event->user, true));
        Mail::to($event->user->email)->send(new WelcomeEmail($event->user->name));
    }
}
