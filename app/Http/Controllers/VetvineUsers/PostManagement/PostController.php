<?php

namespace App\Http\Controllers\VetvineUsers\PostManagement;

use App\Events\NotificationEvent;
use App\Http\Controllers\Controller;
use App\Models\Admins\Forum\Like;
use App\Models\Admins\Forum\Post;
use App\Models\Admins\News\News;
use App\Models\PushNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use vetvineHelper;
use App\Models\User;

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
        $news = News::all();
        $posts = Post::with('user', 'likes')->get();
        return view('frontend.pages.member-home', compact('posts', 'news'));
    }
    public function likeSave(Request $request)
    {
        $liked = Like::where('user_id', Auth::id())->where('post_id', $request->likepostid)->where('ce',$request->ce)->first();
        if (!$liked) {
            $push_notifications = event(new NotificationEvent(Auth::id(), (int) $request->likepostid));
            PushNotification::create([
                'user_id' => Auth::id(),
                'post_id' => $request->likepostid,
                'post_user_id' => $request->postUserid,
                'type' => '0',
            ]);

            $liked = Like::create([
                "post_id" => $request->likepostid,
                "user_id" => Auth::id(),
                "like" => 1,
                "ce" => $request->ce,
            ]);

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully',
                    'code' => 200,
                    'like' => $liked,
                ]
            );

        } elseif ($liked->like == 0) {

            $liked->update([
                "like" => '1',
            ]);
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Post liked successfully!',
                    'code' => 200,
                    'like' => $liked,
                ]
            );
        } else {
            $push_notifications = event(new NotificationEvent(Auth::id(), (int) $request->likepostid));
            PushNotification::create([
                'user_id' => Auth::id(),
                'post_id' => $request->likepostid,
                'post_user_id' => $request->postUserid,
                'type' => '0',
            ]);
            $liked->update([
                "like" => '0',
            ]);
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Post unliked successfully',
                    'code' => 201,
                    'like' => $liked,
                ]
            );
        }
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
        $user = Auth::user()->id;
        $path = public_path('vetvineUsers/posts/');
        $result = vetvineHelper::saveImage($request->post_photo, $path);
        $path = public_path('vetvineUsers/videos/');
        $video = vetvineHelper::saveImage($request->post_add_video, $path);
        $input = $request->all();
        try {
            Post::create([
                "post_title" => $request->post_title,
                "post_photo" => $result,
                "user_id" => $user,
                "post_description" => $request->description,
                "post_link" => $request->post_link,
                "post_add_video" => $video,
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
            $user = Auth::user()->id;
            $post = Post::find($id);
            $path = public_path('vetvineUsers/posts/');
            $result = vetvineHelper::updateImage($request->post_photo, $post->post_photo, $path);
            $path = public_path('vetvineUsers/videos/');
            $video = vetvineHelper::saveImage($request->post_add_video, $path);
            $post->update([
                'post_title' => $request->input('post_title'),
                'post_photo' => $result,
                "user_id" => $user,
                'post_description' => $request->input('description'),
                'post_link' => $request->input('post_link'),
                'post_add_video' => $video,
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
