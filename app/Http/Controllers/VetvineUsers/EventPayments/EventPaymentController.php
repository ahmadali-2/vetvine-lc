<?php

namespace App\Http\Controllers\VetvineUsers\EventPayments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\Webinar\BuyEventPlan;
use App\Models\Admins\Webinar\Event;
use Session;
use Stripe;
use Exception;
use Illuminate\Support\Facades\Auth;
class EventPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
    public function store(Request $request)
    {
        $checkUser =BuyEventPlan::where('user_id',$request->user_id)->first();
        if(!empty($checkUser)){
            parent::warningMessage("You Already Purchased An Event");
            parent::warningMessage("Please Contact With Admin To Proceed Your Query");
            return redirect()->back();
        }
        try{



            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripeResponse =Stripe\Charge::create ([
                    "amount" => $request->event_price,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Vetvine Payment Subscription"
            ]);

            BuyEventPlan::create([
                'transaction_id' => $stripeResponse->id,
                'user_id' => $request->user_id,
                'event_id' => $request->event_id,
                'amount' => $request->event_price,
            ]);
        parent::successMessage("Your Plan Subscribed Successfully");
        parent::successMessage("Your Transaction Id " .$stripeResponse->id);
        return redirect()->route('usermemberships.index');
        } catch(Exception $e) {
            parent::dangerMessage("Something Went Wrong Payment Does Not Proceed");
            parent::dangerMessage("Please Try Again ");
            return redirect()->back();
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
        //
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
