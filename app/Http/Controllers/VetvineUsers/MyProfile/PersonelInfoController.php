<?php

namespace App\Http\Controllers\VetvineUsers\MyProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VetvineUsers\PersonelInfo;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vetvineUsers.MyProfile.dashboard');
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
            User::find($user->id)->update([
                'referred_by'   => $request->referredby,
                'name'          => $request->lastname.' '.$request->lastname,
                'licence_no'    => $request->licensure,
            ]);
            parent::successMessage("Personel Info Saved Successfully!");
            return redirect()->back();
        }
        catch(Exception $e)
        {
            parent::dangerMessage("Personel Info Not Saved! Please Try Again.");
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
