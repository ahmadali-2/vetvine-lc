<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\VetvineUsers\Education;
use App\Models\VetvineUsers\EducationSchoolName;
use App\Models\VetvineUsers\UserEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userEducationData  =  Auth::user()->userEducation;
        $degrees            =  Education::all();
        $schoolnames        =  EducationSchoolName::all();
        return view('vetvineUsers.MyProfile.education',compact('degrees','schoolnames','userEducationData'));
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
            UserEducation::updateOrCreate(
                [
                    'user_id'           => Auth::user()->id],[
                    'degree_name'       => implode(',',$request->degrees),
                    'other_degree'      => $request->otherdegree,
                    'school'            => $request->schoolname,
                    'other_school'      => $request->otherschool,
                    'graduation_year'   => $request->gradutionyear,
                    'internship'        => $request->internship,
                    'residency'         => $request->residency
                ]);
            parent::successMessage("Education Data Saved Successfully!");
            return redirect()->back();
        }
        catch(Exception $e)
        {
            parent::dangerMessage($e->getMessage());
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
