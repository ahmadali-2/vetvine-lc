<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Http\Requests\VetvineUsers\MyProfile\SkillsAndExpertiseRequest;
use Illuminate\Http\Request;
use App\Models\VetvineUsers\SkillAndExpertise;
use App\Models\VetvineUsers\UserSkillsAndExpertise;
use Exception;
use Illuminate\Support\Facades\Auth;

class SkillsAndExpertiseController extends Controller
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
        $userSkills = Auth::user()->userSkillsAndExpertise;
        $sks = [];
        foreach($userSkills as $s)
        {
            if(!in_array($s->skills_expertise_id,$sks))
                $sks[] = $s->skills_expertise_id;
        }
        $skills   =   SkillAndExpertise::all();
        return view('vetvineUsers.MyProfile.skills',compact('skills','sks'));
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
            parent::successMessage("Skills And Expertise Are Saved Successfully!");
            return redirect()->back();
        }
        catch(Exception $e)
        {
            parent::dangerMessage("Skills And Expertise Are Not Saved! Please Try Again.");
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
