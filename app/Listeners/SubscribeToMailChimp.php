<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Mailchimp;
use Yoeunes\Toastr\Facades\Toastr;

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

        $client = new \MailchimpMarketing\ApiClient();

        $client->setConfig([
            'apiKey' => env('MAILCHIMP_API_KEY'),
            'server' => 'us17',
        ]);


        //Get Domains
        // Log::info("List of Domains");
        // $res = $client->verifiedDomains->getVerifiedDomainsAll();
        // $verifiedDomains = json_decode(json_encode($res),true);
        // Log::info($verifiedDomains);

        $email = $event->user->email;
        $domain = ltrim(stristr($email, '@'), '@');
        $response = $client->verifiedDomains->getDomain(strval($domain));

        $data = json_decode(json_encode($response), true);
        if (checkdnsrr($domain, 'ANY') && $domain != 'mailinator.com') {
            $mailChimpApiKey = env('MAILCHIMP_API_KEY');
            $mailchimp = new \Mailchimp($mailChimpApiKey);

            // $mailchimp->subscribte
            try{
                $mailchimp->lists->subscribe(env('MAILCHIMP_LIST_ID'),
                    ['email'=>$event->user->email],
                    null,
                    null,
                    false);
            }
           catch(Exception $e){
                toastr()->success('You have successfully subscribed to our mailing list.');
                Auth::loginUsingId($event->user->id);
                return redirect('/');
            }
        } else {
            return true;
        }
    }
}
