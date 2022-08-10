<?php

namespace App\Http\Controllers\Admins\Generalsettings;

use App\Http\Controllers\Controller;
use App\Jobs\GroupMailJob;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use App\Models\Generals\TimeZone;
use App\Models\MemberTypes;
use App\Models\UserMemberAndNetworkLevel;
use Illuminate\Support\Facades\Log;
class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUsers =User::with('userMemberType')->where('type','!=','1')->get();
        return view('admins.generalsettings.manageusers.index',compact('allUsers'));
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
        //
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
        $user =User::with('timezone')->find($id);
        $timezones = TimeZone::all();
        $networklevels = UserMemberAndNetworkLevel::where('parent_id', Null)->get();
        return view('admins.generalsettings.manageusers.edituser',compact('user','timezones','networklevels'));
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
        try{
            $user =User::find($id);
            $user->update([
                'status'=> 0
            ]);
            parent::warningMessage("User deleted Temporarily");
            return redirect()->back();
        } catch(Exception $e) {
            parent::dangerMessage("User Record Does Not Deleted, Please Try Again");
            return redirect()->back();
        }
    }

    public function unapprovedUsers()
    {
        $allUsers =User::where('type', 2)->where('status', 0)->get();
        return view('admins.generalsettings.manageusers.viewusersrequest',compact('allUsers'));
    }

    public function approvedUsers(Request $request)
    {
        try{
            $user =User::where('id', $request->userid)->first();
            $user->update([
                'status'  => 1
            ]);
            parent::successMessage("User Status Updated Successfully");
            return  response()->json(['response' => 'success']);
        } catch(Exception $e) {
            parent::dangerMessage("User Does Not  Updated Successfully , Please Try Again");

           return  response()->json(['response' => 'error']);
        }
    }

    public function deleteUser($id)
    {
        try{
            $user =User::find($id);
            $user->delete();
            parent::successMessage("User deleted Permanently");
            return redirect()->back();
        } catch(Exception $e) {
            parent::dangerMessage("User Record Does Not Deleted, Please Try Again");
            return redirect()->back();
        }
    }

    public function userLevelsInNetwork($id)
    {
        $userlevels = UserMemberAndNetworkLevel::where('parent_id', $id)->get();
        return json_encode($userlevels);
    }
    public function changeUserType($id)
    {

        $memberTypes = MemberTypes::all();
        $user =User::with('userMemberType')->where('id',$id)->first();
        return view('admins.generalsettings.manageusers.editusertype',compact('memberTypes','user'));

    }
    public function updateUserType(Request $request)
    {
        try{
            $user =User::where('id', $request->id)->first();
            $user->update([
                'type'                => $request->type,
                'blocked_user'        => ($request->blocked_user == "on") ? '1' : '0',
            ]);
            parent::successMessage("User Status Updated Successfully");
             return redirect(route('manageuser.index'));
        } catch(Exception $e) {
            parent::dangerMessage("User Does Not  Updated Successfully , Please Try Again");
            return  redirect()->back();
        }

    }
    //Group Mailing
    public function groupMail(){
        $allUsers =User::with('userMemberType')->where('type','!=','1')->get();
        return view('admins.generalsettings.manageusers.groupemail',compact('allUsers'));
    }

    public function groupMailSent(Request $request){
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'user' => 'required'
        ],[
            'subject.required' => 'Subject Feild Is Required',
            'message.required' => 'Message Feild Is Required',
            'user.required' => 'Please Select User To Send Mail'
        ]);
        dispatch((new GroupMailJob($request->all()))->delay(now()->addSeconds(5)));
            // return response()->json([
            //     'status' => 200,
            //     'message' => 'Mail has been sent to selected users!'
            // ]);
        parent::successMessage("Email Has Been Sent Successfully");
        return back();
    }


}
