<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\Admins\Webinar\BuyEventPlan;
use App\Models\Generals\TimeZone;
use App\Models\PushNotification;
use App\Models\User;
use App\Models\UserMemberAndNetworkLevel;
use App\Models\VetvineUsers\Settings\Country;
use App\Models\VetvineUsers\UserEmploymentInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use vetvineHelper;
use App\Models\Admins\Webinar\Event;
use App\Models\NotificationHistory;
use App\Models\PostActivity;

// use App\Models\VetVineUsers\Settings\Country;
// use Country

class PersonelInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function userdashboard()
    {
        $countries =Country::all();
        // return $countries;
        // dd($countries);
        $employmentInfo = Auth::user()->employmentInfo;
        $permissions = Auth::user()->permissions;
        $timezones      = TimeZone::all();
        $usernetworks  = UserMemberAndNetworkLevel::get()->reject(function($q){
            return  $q->parent_id == Null;
        })->map(function($q){
            return $q;
        });
        $licensurePermissions = User::where('id', Auth::id())->first();
        return view('vetvineUsers.layouts.pages.user_profile', compact('countries', 'employmentInfo', 'timezones', 'usernetworks', 'licensurePermissions'));
    }

    public function userProfile()
    {
        $countries = Country::all();
        $employmentInfo = Auth::user()->employmentInfo;
        $timezones      = TimeZone::all();
        $usernetworks   = UserMemberAndNetworkLevel::where('parent_id','!=',null)->get();
        $licensurePermissions = User::where('id', Auth::id())->first();
        // return $licensurePermissions;
        return view('vetvineUsers.layouts.pages.user_profile', compact('countries', 'employmentInfo', 'timezones', 'usernetworks', 'licensurePermissions'));
    }
    public function chat()
    {
        return view('vetvineUsers.layouts.pages.chat');
    }
    public function notifications()
    {
        // $notifications = PushNotification::with('posts', 'user')
        // ->where('post_user_id', Auth::user()->id)
        // ->orderBy('id','desc')
        // ->paginate(4);
        $notifications = NotificationHistory::with('post','actionBy')->where(['user_id'=>Auth::user()->id])->orderBy('id','desc')->paginate(4);
        // PushNotification::where('post_user_id',Auth::user()->id)->update(['is_read'=>'0']);
        NotificationHistory::where('user_id',Auth::user()->id)->update(['is_read' => 0]);
        return view('vetvineUsers.layouts.pages.notifications', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $user = Auth::user();
            if (request()->hasFile('profile_photo')) {
                $path = public_path('/frontend/images/Profile-Images/');
                $result = vetvineHelper::saveImage($request->profile_photo, $path);
                User::find($user->id)->update([
                    'profile_photo' => $result,
                    // 'referred_by'   => $request->referredby,
                    'name' => $request->firstname . ' ' . $request->lastname,
                    'licence_no' => $request->licensure,
                    'timezone_id' => $request->timezone,
                    'network_id' => $request->usernetwork,
                ]);
            } else {
                User::find($user->id)->update([
                    // 'referred_by'   => $request->referredby,
                    'name' => $request->firstname . ' ' . $request->lastname,
                    'licence_no' => $request->licensure,
                    'timezone_id' => $request->timezone,
                    'network_id' => $request->usernetwork,
                ]);
            }
            UserEmploymentInfo::updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                ],
                [
                    'street_address' => $request->street_address,
                    'business_name' => $request->business_name,
                    'business_email' => $request->business_email,
                    'country' => $request->country,
                    'city' => $request->city,
                    'work_phone' => $request->work_phone,
                ]);

            //check either user has been complete his profile or not?
            UserEmploymentInfo::where('user_id', $user->id)->update(['profile_status' => 'completed']
            );
            parent::successMessage("Profile Info Saved Successfully!");
            return redirect(route('member_home'));
        } catch (Exception $e) {
            // dd($e->getMessage());
            parent::dangerMessage("Profile Info Not Saved! Please Try Again.");
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

    }

    public function myUpcommingEvents(){
        $events = BuyEventPlan::where(['user_id'=>Auth::id(),'status' => 'Upcoming'])->with('buyevents')->paginate(5);


        return view('vetvineUsers.events.myupcomming_events',compact('events'));
    }

    public function myPastEvents(){
        $events = BuyEventPlan::where(['user_id'=>Auth::id(),'status' => 'Past'])->with('buyevents')->paginate(5);
        return view('vetvineUsers.events.pastevents',compact('events'));
    }
}

