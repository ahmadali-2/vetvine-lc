<?php

namespace App\Http\Controllers\Admins\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\Forum\Post;
use App\Models\Admins\Forum\Comment;
use Auth;
use Exception;

class CommentController extends Controller
{
    public function showComments(Request $request){
        // dd($request->all());
        $comments = null;
        if($request->type == 'post'){
            $post = Post::with('comments')->where('id',$request->post_id)->first();
            $comments = $post->comments;
        }
        return response()->json([
            'html' => view('frontend.pages.forums.replies', [
                'comments' => $comments,
                'post_id' => $request->post_id,
            ])->render(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if(auth()->user()){
            if(isset(auth()->user()->email_verified_at)){
                if($request->comment == '')
                {
                    return back();
                }
                else
                {
                $comment = new Comment;
        
                $comment->comment = $request->comment;
        
                $comment->user()->associate($request->user());
        
                $post = Post::find($request->post_id);
        
                $post->comments()->save($comment);
                if($request->ajax()){
                    return response()->json([
                        'code' => 200,
                        'message' => 'Comment added successfully!',
                    ]);
                }else{
                    return back();
                }

                }
            }else{
                parent::dangerMessage("Please verify your email to comment");
                return back();
            }
        }else{
            parent::dangerMessage("User not login, Please login first!");
            return back();
        }
    }
    public function replyStore(Request $request)
    {
        if($request->reply == '')
        {
            return back();
        }
        else
        {
            $reply = new Comment();

            $reply->comment = $request->get('reply');

            $reply->user()->associate($request->user());

            $reply->parent_id = $request->get('comment_id');

            $post = Post::find($request->get('post_id'));

            $post->comments()->save($reply);

            return back();
        }

    }
    public function destroy($id)
    {
        try{
            Comment::find($id)->delete();
            parent::successMessage('Comment Deleted successfully.');
            return redirect()->back();
        } catch(Exception $e) {
      
            parent::dangerMessage("Comment Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
