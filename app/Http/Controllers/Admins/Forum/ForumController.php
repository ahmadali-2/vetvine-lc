<?php

namespace App\Http\Controllers\Admins\Forum;

use App\Http\Controllers\Controller;
use App\Models\Admins\Forum\CategoryForum;
use App\Models\Admins\Forum\Forum;
use App\Models\Generals\Member;
use App\Models\UserMemberAndNetworkLevel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories   =   CategoryForum::all();
        $forums       =   Forum::with('category')->get();
        return view('admins.forums.index',compact('categories','forums'));
    }

    public function frontendIndex()
    {
        $user=Auth::user();
        if($user)
        {
        $categories   =   CategoryForum::all();
        return view('frontend.pages.forums.index',compact('categories'));
        }
        else
        {
            parent::dangerMessage("Your Are Not Logged in, Please Login And Try  Again");
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =   CategoryForum::all();
        $members    =   UserMemberAndNetworkLevel::all();
        return view('admins.forums.create',compact('categories','members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        try{
               $forum = Forum::create([
                "category_id"           => $input['category_id'],
                "forum_title"           => ucwords($input['forum_title']),
                "forum_description"     => ucfirst($input['forum_description']),
            ]);
            if($forum->wasRecentlyCreated)
            {
                foreach($input['member_id'] as $member)
                {
                    Member::create([
                    "memberable_id"   =>  $forum->id,
                    "memberable_type" => 'App\Models\Admins\Forum\Forum',
                    'member_id'       => $member,
                    ]);
                }
            }
            parent::successMessage('Forum saved successfully.');
            return redirect(route('forums.index'));
        } catch(Exception $e) {
            parent::dangerMessage("Forum Does Not Created, Please Try  Again");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $categories         =   CategoryForum::all();
            $members            =   UserMemberAndNetworkLevel::all();
            $forum              =   Forum::find($id);
            $selectedMembers    =   $forum->members->pluck('member_id')->toArray();
            return view('admins.forums.edit',compact('categories','members','forum','selectedMembers'));
        } catch(Exception $e) {
            parent::dangerMessage("Forum Does Not Created, Please Try  Again");
            return redirect()->back();
        }
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
        
        $input = $request->all();
        $forum = Forum::find($id);
        try{
               $forum->update([
                "category_id"           => $input['category_id'],
                "forum_title"           => ucwords($input['forum_title']),
                "forum_description"     => ucfirst($input['forum_description']),
            ]);
            $selectedMembers    =   $forum->members->pluck('id')->toArray();
            Member::whereIn('id',$selectedMembers)->delete();
            foreach($input['member_id'] as $member)
            {
                Member::create([
                    "memberable_id"   =>  $forum->id,
                    "memberable_type" => 'App\Models\Admins\Forum\Forum',
                    'member_id'       => $member,
                ]);
            }
            parent::successMessage('Forum updated successfully.');
            return redirect(route('forums.index'));
        } catch(Exception $e) {
            parent::dangerMessage("Forum Does Not Updated, Please Try  Again");
            return redirect()->back();
        }
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
            Forum::find($id)->delete();
            parent::successMessage('Forum Deleted successfully.');
            return redirect(route('forums.index'));
        } catch(Exception $e) {
            parent::dangerMessage("Forum Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
