<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\VetvineUsers\UserEmploymentInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VetvineUsers\Settings\Country;

class EmploymentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries      = Country::all();
        $employmentInfo = Auth::user()->employmentInfo;
        return view('vetvineUsers.MyProfile.employmentInfo',compact('employmentInfo','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            UserEmploymentInfo::updateOrCreate(
            [
                'user_id' => Auth::user()->id
            ],
            [
                'professional_position' => $request->professional_position,
                'employment_status'     => $request->employment_status,
                'street_address'        => $request->street_address,
                'business_name'         => $request->business_name,
                'business_email'        => $request->business_email,
                'country'               => $request->country,
                'state'                 => $request->state,
                'city'                  => $request->city,
                'zip_code'              => $request->zip_code,
                'work_phone'            => $request->work_phone,
                'details'               => $request->details
            ]);
            parent::successMessage("Employment Info updated successfully");
            return redirect()->back();
        }
        catch(Exception $e)
        {
            parent::dangerMessage("Employee Data Not Saved! Please Try Again.");
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
