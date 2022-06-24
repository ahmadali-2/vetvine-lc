<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;

class SubscribeToMailChimp
{
    // private $mailchimp;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->mailchimp = $mailchimp;

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {



        // $exploded = explode('@',$domain);
        // $exploded = '@'.$exploded[1];
        $email = $event->user->email;
        $domian = ltrim(stristr($email, '@'),'@');
        if (checkdnsrr($domian, "ANY") && $domian != 'mailinator.com') {
            $mailChimpApiKey = env('MAILCHIMP_API_KEY');
            $mailchimp = new \Mailchimp($mailChimpApiKey);
            $mailchimp->lists->subscribe(env('MAILCHIMP_LIST_ID'),
                ['email' => $event->user->email],
                null,
                null,
                false);
        } else {
            return true;
        //    $controller = new Controller();
        //    $controller->dangerMessage('Email Looks Fake');
        }


    }
}
