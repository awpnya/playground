<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Models\ContactForm;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactFormNotification
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
     * @param  ContactFormSubmitted  $event
     * @return void
     */
    public function handle(ContactFormSubmitted $event)
    {
        //dd($event->contactForm);
        // dd($event->contactForm);
        // $admin = ContactForm::latest()->first();
        // dd($admin);
        $event->contactForm->notify(new \App\Notifications\ContactFormSubmitted($event->contactForm));
    }
}
