<?php

namespace App\Http\Controllers\VetvineUsers\PostManagement;

use App\Http\Controllers\Controller;
use App\Models\Admins\News\News;
use App\Models\VetvineUsers\Post;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use vetvineHelper;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('vetvineUsers.post.index', compact('posts'));
    }

    public function memberHome()
    {
        $news   =   News::all();
        $posts  = Post::with('user')->get();
        return view('frontend.pages.member-home',compact('posts','news'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vetvineUsers.post.create');
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
        $input  = $request->all();
        try {
            Post::create([
                "post_title"                 =>  $request->post_title,
                "post_photo"                 =>  $result,
                "user_id"                    =>  $user,
                "post_description"           =>  $request->description,
                "post_link"                  =>  $request->post_link,
                "post_add_ytlink"            =>  $request->post_add_ytlink,
                "post_add_vimeolink"         =>  $request->post_add_vimeolink,
                "post_add_video"             =>  $video,
            ]);
            parent::successMessage('Post saved successfully.');
            return redirect(route('post.index'));
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
        $post = Post::find($id);
        return view('vetvineUsers.post.edit', compact('post'));
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
        try {
            $user   = Auth::user()->id;
            $post   = Post::find($id);
            $path   = public_path('vetvineUsers/posts/');
            $result = vetvineHelper::updateImage($request->post_photo, $post->post_photo, $path);
            $path   = public_path('vetvineUsers/videos/');
            $video  = vetvineHelper::saveImage($request->post_add_video, $path);
            $post->update([
                'post_title'             =>  $request->input('post_title'),
                'post_photo'             =>  $result,
                "user_id"                =>  $user,
                'post_description'       =>  $request->input('description'),
                'post_link'              =>  $request->input('post_link'),
                'post_add_ytlink'        =>  $request->input('post_add_ytlink'),
                'post_add_vimeolink'     =>  $request->input('post_add_vimeolink'),
                'post_add_video'         =>  $video,
            ]);
            parent::successMessage('Post updated successfully.');
            return redirect(route('post.index'));
        } catch (Exception $e) {
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
        try {
            $post = Post::find($id);
            $post->delete();
            parent::successMessage('Post deleted successfully.');
            return redirect()->route('post.index');
        } catch (Exception $e) {
            parent::dangerMessage("Post Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
