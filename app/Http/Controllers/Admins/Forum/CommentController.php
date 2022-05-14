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
    public function store(Request $request)
    {
        $request->validate([
            'comment'      => 'required',
        ]);
        $comment = new Comment;

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $post = Post::find($request->post_id);

        $post->comments()->save($comment);

        return back();
    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('reply');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }
    public function destroy($id)
    {
        try{
            Comment::find($id)->delete();
            parent::successMessage('Comment Deleted successfully.');
            return redirect(route('forumpostlist'));
        } catch(Exception $e) {
            parent::dangerMessage("Comment Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
