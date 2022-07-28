<?php

namespace App\Events;

use App\Models\Admins\Forum\Post;
use App\Models\NotificationHistory;
use App\Models\PostActivity;
use App\Models\Share;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userName;

    public $userDesc;

    public $postTitle;

    public $userPhoto;

    public $postImg;

    public $from_message;
    public $to_message;

    public $username;
    public $message;

    public $user_messages_name;
    public $user_messages_image;
    public $userId;
    public $postUserId;
    public $authUser;
    public $actionType;

    // public $likes;
    /**.
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        Log::info($data);
        $user = User::find($data['user_id']) ?? '';
        if (isset($data['post_id'])) {
            $post = Post::find($data['post_id']) ?? '';
            if (isset($data['is_like'])) {
                Log::info('Simple Post liked');
                Log::info("Inner Like Post");
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Like'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "Liked";
                Log::info("Inner Like Post");
            } elseif (isset($data['is_comment'])) {
                //Simple Post Comment
                Log::info('Simple Post Comment');
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Comment'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "Comment";
            } else {
                //Simple Post Create
                Log::info('Simple Post Shared');
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Share'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "Shared";
            }
        } else {
            Log::info('Shared Post liked');
            $sharePost = Share::find($data['share_id']) ?? '';
            Log::info($sharePost);
            $post = Post::find($sharePost->post_id) ?? '';
            Log::info($post);
            if(isset($data['is_like'])){
                //Share Post Like
                Log::info('Share Post liked');
                Log::info("Inner Share Like Post");
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Like'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                Log::info("Inner Share Like Post");
                $this->actionType = "Shared Post Liked";

            }else if(isset($data['is_comment'])){
                //Share Post Comment
                Log::info('Share Post Comment');
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Comment'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "Comment";
            }else{
                //Share Post Create
                Log::info('Share Post created');
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'Share'
                ]);
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "Share";
            }
        }

        // $user = User::find((int)$user_id) ?? '';
        // if($action === "share"){
        //     Log::info("Share Event");
        //     $this->actionType = $action;
        //     $this->userPhoto = $user->profile_photo ?? '';
        //     // $this->userName = $post->user->name ?? '';
        //     $this->userName = $user->name;
        //     $this->postImg = $post->post_photo ?? '';
        //     $this->userDesc = $post->post_description ?? '';
        //     $this->postTitle = $post->post_title ?? '';
        //     $this->userId = $user->id;
        //     $this->authUser = Auth::user()->id;
        //     $this->postUserId = $post->user_id;
        // }else{
        //     Log::info('Like Event');
        //     $this->actionType = $action;
        //     $this->userPhoto = $user->profile_photo ?? '';
        //     // $this->userName = $post->user->name ?? '';
        //     $this->userName = $user->name;
        //     $this->postImg = $post->post_photo ?? '';
        //     $this->userDesc = $post->post_description ?? '';
        //     $this->postTitle = $post->post_title ?? '';
        //     $this->userId = $user->id;
        //     $this->authUser = Auth::user()->id;
        //     $this->postUserId = $post->user_id;
        // }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }
    public function broadcastAs()
    {
        return 'notification-event';
    }
}
