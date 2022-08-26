<?php

namespace App\Http\Controllers\VetvineUsers\EventPayments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\Webinar\BuyEventPlan;
use App\Models\Admins\Webinar\Event;
use App\Models\BuyVideoPlan;
use App\Models\User;
use App\VetvineFacades\VetvineHelperFacade;
use Session;
use Stripe;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EventPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->event_price == ''){
            parent::warningMessage('Please select payment first');
            return redirect()->back();
        }
        $event_price = $request->event_price;
        $event_id = $request->event_id;
        $user = Auth::user();
        if($user){
            return view('frontend.pages.webinars.payementwebinars',compact('event_price','event_id'));
        }
        else{
            parent::dangerMessage("Your Are Not Logged in, Please Login And Try  Again");
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paymentWebinars(Request $request)
    {
        if($request->video == "1"){
            $checkUser =BuyVideoPlan::where('user_id',$request->user_id)->where('video_id', $request->event_id)->first();
        }else{
            $checkUser =BuyEventPlan::where('user_id',$request->user_id)->where('event_id', $request->event_id)->first();
        }
        if(!empty($checkUser)){
            parent::warningMessage("You Already Purchased An Event");
            parent::warningMessage("Please Contact With Admin To Proceed Your Query");
            if($request->ajax() == false){
                if(isset($request->location)){
                    if($request->video == "1"){
                        return redirect('video-description/'.$request->event_id.$request->category_id);
                    }else{
                        return redirect('upcoming-webinars-details/'.$request->event_id);
                    }
                }
                if($request->video == "1"){
                    return redirect()->url('videos-on-demand');
                }else{
                    return redirect()->route('upcoming_webinars');
                }
            }
        }
        try{
            Stripe\Stripe::setApiKey('sk_test_51L43BqKuqsAISa0ttkLpNjhOiJPwPK4KjychhTSoNof5g0WHg8uppTYHqpqEz4yQFaNbEcxbnQW0jabEqno6GQn200dm5rjGm1');
            $stripeResponse =Stripe\Charge::create([
                    "amount" => (int)$request->event_price*100,
                    "currency" => "USD",
                    "source" => $request->stripeToken,
                    "source" => 'tok_visa',
                    "description" => "Vetvine Event Payment Subscription"
            ]);

            // dd($stripeResponse);
            // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // $stripeResponse =Stripe\Charge::create ([
            //         "amount" => $request->event_price*100,
            //         "currency" => "usd",
            //         "source" => $request->stripeToken,
            //         "description" => "Vetvine Payment Subscription"
            // ]);
            // dd("success");
            // parent::successMessage("Payment Successful");
            // parent::successMessage("Event Subscribed Successfully");
            // dd("Payment success:",$table);
            if($request->video == "1"){
                BuyVideoPlan::create([
                    'transaction_id' => $stripeResponse->id,
                    'user_id' => $request->user_id,
                    'video_id' => $request->event_id,
                    'amount' => $request->event_price,
                ]);
                parent::successMessage("Payment Successful");
                parent::successMessage("Event Subscribed Successfully");
                parent::successMessage("Your Transaction Id " .$stripeResponse->id);

            }else{
                BuyEventPlan::create([
                    'transaction_id' => $stripeResponse->id,
                    'user_id' => $request->user_id,
                    'event_id' => $request->event_id,
                    'amount' => $request->event_price,
                ]);

                $event = BuyEventPlan::with('buyevents', 'user')
                ->whereHas('user', function($query) use($request){
                    $query->where('id',$request->user_id);
                })->whereHas('buyevents', function($query2) use($request){
                    $query2->where('id', $request->event_id);
                })->first();

                $tags = explode(',',$event->buyevents->tags);

                for($i=0;$i<count($tags);$i++){
                    VetvineHelperFacade::getMailchimpMarketing()->lists->updateListMemberTags(env('MAILCHIMP_LIST_ID'), strtolower(md5($event->user->email)),[
                        "tags" => [["name" => $tags[$i], "status" => "active"]],
                    ]);
                }

                // $response = $client->searchMembers->search($user->email);
                // dd($response->exact_matches->members[0]);

                parent::successMessage("Payment Successful");
                parent::successMessage("Event Subscribed Successfully");
                parent::successMessage("Your Transaction Id " .$stripeResponse->id);
            }


        if($request->ajax() == false){
            if(isset($request->location)){
                if($request->video == "1"){
                    return redirect('video-description/'.$request->event_id.$request->category_id);
                }else{
                    return redirect('upcoming-webinars-details/'.$request->event_id);
                }
            }
            return redirect()->route('upcoming_webinars');
        }

        } catch(Exception $e) {
            dd($e->getMessage());
            parent::dangerMessage("Something Went Wrong Payment Does Not Proceed");
            parent::dangerMessage("Please Try Again ");
            if($request->ajax() == false){
                if(isset($request->location)){
                    if($request->video == "1"){
                        return redirect('video-description/'.$request->event_id.$request->category_id);
                    }else{
                        return redirect('upcoming-webinars-details/'.$request->event_id);
                    }
                }
                return redirect()->route('upcoming_webinars');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
