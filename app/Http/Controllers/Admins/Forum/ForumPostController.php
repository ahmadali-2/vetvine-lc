<?php

namespace App\Http\Controllers\Admins\Forum;

use App\Http\Controllers\Controller;
use App\Models\Admins\Forum\Forum;
use App\Models\Admins\Forum\Post;
use Exception;
use vetvineHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
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
        $user   = Auth::user()->id;
        $path   = public_path('vetvineUsers/posts/');
        $result = vetvineHelper::saveImage($request->post_photo, $path);
        $path   = public_path('vetvineUsers/videos/');
        $video  = vetvineHelper::saveImage($request->post_add_video, $path);
        try {
            Post::create([
                "forum_id"                   =>  $request->forum_id,
                "user_id"                    =>  $user,
                "post_title"                 =>  ucwords($request->post_title),
                "post_photo"                 =>  $result,
                "post_description"           =>  ucfirst($request->description),
                "post_link"                  =>  $request->post_link,
                "post_add_ytlink"            =>  $request->post_add_ytlink,
                "post_add_vimeolink"         =>  $request->post_add_vimeolink,
                "post_add_video"             =>  $video,
            ]);
            parent::successMessage('Post saved successfully.');
            return redirect(route('forumpostlist',$request->forum_id));
        } catch (Exception $e) {
            parent::dangerMessage("Post Does Not Created, Please Try  Again");
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
        $posts = Post::with('user')->where('forum_id','!=','Null')->find($id);
        return view('frontend.pages.forums.posts',compact('posts'));
    }

    public function createPost($id)
    {
        $forum = Forum::find($id);
        return view('frontend.pages.forums.create_post',compact('forum'));
    }

    public function forumPostList($id)
    {
        $forum = Forum::find($id);
        $posts = $forum->posts;
        return view('frontend.pages.forums.forums_post',compact('posts','forum'));
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
            $post = Post::find($id);
            return view('frontend.pages.forums.edit-forumpost',compact('post'));
        } catch(Exception $e) {
            parent::dangerMessage("Post Does Not Edited, Please Try  Again");
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
        $user   = Auth::user()->id;
        $path   = public_path('vetvineUsers/posts/');
        $result = vetvineHelper::saveImage($request->post_photo, $path);
        $path   = public_path('vetvineUsers/videos/');
        $video  = vetvineHelper::saveImage($request->post_add_video, $path);
        try {
            Post::find($id)->update([
                "forum_id"                   =>  $request->forum_id,
                "user_id"                    =>  $user,
                "post_title"                 =>  ucwords($request->post_title),
                "post_photo"                 =>  $result,
                "post_description"           =>  ucfirst($request->description),
                "post_link"                  =>  $request->post_link,
                "post_add_ytlink"            =>  $request->post_add_ytlink,
                "post_add_vimeolink"         =>  $request->post_add_vimeolink,
                "post_add_video"             =>  $video,
            ]);
            parent::successMessage('Post Updated successfully.');
            return redirect(route('forumpostlist',$request->forum_id));
        } catch(Exception $e) {
            parent::dangerMessage("Post Does Not Updated, Please Try  Again");
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
            Post::find($id)->delete();
            parent::successMessage('Post Deleted successfully.');
            return redirect(route('forumsfrontend'));
        } catch(Exception $e) {
            parent::dangerMessage("Post Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
