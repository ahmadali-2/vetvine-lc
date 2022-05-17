<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserEducationDegree;
use App\Models\VetvineUsers\Education;
use App\Models\VetvineUsers\EducationSchoolName;
use Illuminate\Http\Request;
use vetvineHelper;
use App\Models\VetvineUsers\Settings\Country;
use App\Models\VetvineUsers\PersonelInfo;
use App\Models\VetvineUsers\SkillAndExpertise;
use App\Models\VetvineUsers\UserEducation;
use App\Models\VetVineUsers\UserEmploymentInfo;
use App\Models\VetvineUsers\UserSkillsAndExpertise;
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
        $userSkills     = Auth::user()->userSkillsAndExpertise;
        $sks = [];
        foreach($userSkills as $s)
        {
            if(!in_array($s->skills_expertise_id,$sks))
                $sks[] = $s->skills_expertise_id;
        }
        $userdegrees        =  Auth::user()->userEducationDegree;
        $ued = [];
        foreach($userdegrees as $s)
        {
            if(!in_array($s->degree_id,$ued))
                $ued[] = $s->degree_id;
        }
        $skills             =  SkillAndExpertise::all();
        $userEducationData  =  Auth::user()->userEducation;
        $degrees            =  Education::all();
        $schoolnames        =  EducationSchoolName::all();
        return view('vetvineUsers.MyProfile.userdashboard',compact('countries','employmentInfo','skills','sks','degrees','schoolnames','userEducationData','ued'));
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
            $path   = public_path('/frontend/images/Profile-Images/');
            $result = vetvineHelper::saveImage($request->profile_photo, $path);
            User::find($user->id)->update([
                'referred_by'   => $request->referredby,
                'name'          => $request->lastname.' '.$request->lastname,
                'licence_no'    => $request->licensure,
                'profile_photo' => $result
            ]);
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
                UserEducation::updateOrCreate(
                    [
                        'user_id'           => Auth::user()->id],[
                        'other_degree'      => $request->otherdegree,
                        'school'            => $request->schoolname,
                        'other_school'      => $request->otherschool,
                        'graduation_year'   => $request->gradutionyear,
                        'internship'        => $request->internship,
                        'residency'         => $request->residency
                    ]);
            $userDegrees = Auth::user()->userEducationDegree;
            $ued = [];
            foreach($userDegrees as $s)
            {
                $s->delete();
            }
            foreach($request->degree_id as $degrees)
            {
                    UserEducationDegree::create([
                        'degree_id' => $degrees,
                        'user_id'   => Auth::user()->id
                    ]);
            }
            $userSkills = Auth::user()->userSkillsAndExpertise;
            $sks = [];
            foreach($userSkills as $s)
            {
                $s->delete();
            }
            foreach($request->skillsandexpertise as $skillsdata)
            {
                    UserSkillsAndExpertise::create([
                        'skills_expertise_id' => $skillsdata,
                        'user_id'             => Auth::user()->id
                    ]);
            }
            parent::successMessage("Profile Info Saved Successfully!");
            return redirect(route('member_home'));
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
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
