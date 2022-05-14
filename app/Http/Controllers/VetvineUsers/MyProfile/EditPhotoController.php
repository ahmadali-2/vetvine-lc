<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use vetvineHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditPhotoController extends Controller
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
        return view('vetvineUsers.MyProfile.editPhoto');
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
            $path   = public_path('/frontend/images/Profile-Images/');
            $result = vetvineHelper::saveImage($request->profile_photo, $path);
            $user   = Auth::user();
            User::find($user->id)->update(['profile_photo' => $result]);
            parent::successMessage("Profile Photo updated successfully");
            return back();
        }
        catch(Exception $e)
        {
            parent::dangerMessage("Photo Not Saved! Please Try Again.");
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
