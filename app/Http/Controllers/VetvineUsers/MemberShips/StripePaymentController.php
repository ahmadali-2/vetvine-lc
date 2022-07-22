<?php

namespace App\Http\Controllers\VetvineUsers\MemberShips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\Memberships\MemberShipPlan;
use App\Models\Admins\Memberships\BuyMemberShipPlan;
use App\Models\Coupon;
use App\Models\CouponUser;
use Carbon\Carbon;
use Session;
use Stripe;
use Exception;
use Stripe\Coupon as StripeCoupon;

class StripePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans =MemberShipPlan::with('plancategory')->get();

        return view('vetvineUsers.memberships.index',compact('plans'));
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
        // dd($request->all());
        $checkUser =BuyMemberShipPlan::where('user_id',$request->user_id)->first();
        if(!empty($checkUser)){
            parent::warningMessage("You Already Subscribed A Member Ship Plan");
            parent::warningMessage("Please Contact With Admin To Proceed Your Query");
            return redirect()->back();
        }
        try{

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $stripeResponse =Stripe\Charge::create ([
                    "amount" => $request->plan_price*100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Vetvine Payment Subscription"
            ]);

            $buyMembershipPlan = new BuyMemberShipPlan();
            $buyMembershipPlan->transaction_id = $stripeResponse->id;
            $buyMembershipPlan->user_id = $request->user_id;
            $buyMembershipPlan->member_ship_plan_id = $request->membershipplan_id;
            $buyMembershipPlan->amount = $request->plan_price;
            $buyMembershipPlan->save();

            if($stripeResponse->status == 'succeeded'){
                $buycoupon = new CouponUser();
                $buycoupon->user_id = $request->user_id;
                $buycoupon->coupon_id = $request->coupon_id;
                $buycoupon->buy_membership_plan_id = $buyMembershipPlan->id;
                $buycoupon->save();
                parent::successMessage("You Have Successfully Subscribed A Member Ship Plan");
                return redirect()->back();
            }

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

        $plan =MemberShipPlan::with('plancategory')->find($id);
        return view('vetvineUsers.memberships.buymembershipform',compact('plan'));
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
    public function applyCouponCode(Request $request)
    {
        $coupon = Coupon::where('coupon_code', $request->coupon_code)->where('expired_at','>=',Carbon::today())->first();
        $couponuser = CouponUser::where('user_id', auth()->id())->where('coupon_id',$coupon->id)->first();
        if(!empty($couponuser)){
            return response()->json(['code'=>400, 'message'=>'Coupon already applied!', 'success' => false]);
        }else{
            if (!empty($coupon)) {
                if($coupon->status == 1){
                    if($coupon->coupon_type == 'percentage'){
                        $discount = $coupon->amount;
                        $discounted_price = $request->plan_price - ($request->plan_price * $discount / 100);
                        return response()->json(['code'=>200, 'coupon_id'=>$coupon->id, 'status' => 'success', 'message'=>'Coupon code applied!', 'discount' => $discount, 'discounted_price' => $discounted_price]);
                    }elseif($coupon->coupon_type == 'fixed'){
                        $discount = $coupon->amount;
                        $discounted_price = $request->plan_price - $discount;
                        return response()->json(['code'=>200, 'coupon_id'=>$coupon->id, 'status' => 'success', 'message'=>'Coupon code applied!', 'discount' => $discount, 'discounted_price' => $discounted_price]);
                    }
                }else{
                    return response()->json(['code'=>400, 'message'=>'Coupon expired!', 'success' => false]);
                }
            } else {
                return response()->json(['code'=>401, 'message'=>'Coupon not found!', 'success' => false]);
            }
        }

    }
}
