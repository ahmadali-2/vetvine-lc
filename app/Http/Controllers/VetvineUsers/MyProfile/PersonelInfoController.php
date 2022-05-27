<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use vetvineHelper;
use App\Models\VetvineUsers\Settings\Country;
use App\Models\VetvineUsers\PersonelInfo;
use App\Models\VetvineUsers\UserEmploymentInfo;
use Exception;
use Illuminate\Support\Facades\Auth;

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
        $countries      = Country::all();
        $employmentInfo = Auth::user()->employmentInfo;
        return view('vetvineUsers.MyProfile.userdashboard',compact('countries','employmentInfo'));
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
            $user   = Auth::user();
            if (request()->hasFile('profile_photo'))
            {
                $path   = public_path('/frontend/images/Profile-Images/');
                $result = vetvineHelper::saveImage($request->profile_photo, $path);
                User::find($user->id)->update([
                    'profile_photo' => $result,
                    'referred_by'   => $request->referredby,
                    'name'          => $request->firstname.' '.$request->lastname,
                    'licence_no'    => $request->licensure
                ]);
            }
            else
            {
                User::find($user->id)->update([
                    'referred_by'   => $request->referredby,
                    'name'          => $request->firstname.' '.$request->lastname,
                    'licence_no'    => $request->licensure,
                ]);
            }
            UserEmploymentInfo::updateOrCreate(
                [
                    'user_id' => Auth::user()->id
                ],
                [
                    'street_address'        => $request->street_address,
                    'business_name'         => $request->business_name,
                    'business_email'        => $request->business_email,
                    'country'               => $request->country,
                    'city'                  => $request->city,
                    'work_phone'            => $request->work_phone
                ]);

                //check either user has been complete his profile or not?
                UserEmploymentInfo::where('user_id',$user->id)->update(['profile_status' => 'completed']
                );
                parent::successMessage("Profile Info Saved Successfully!");
            return redirect(route('member_home'));
        }
        catch(Exception $e)
        {
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
        //
    }
}
