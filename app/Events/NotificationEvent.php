<?php

namespace App\Events;

use App\Models\Admins\Forum\Post;
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
    public function __construct($user_id, $body,$action)
    // public function __construct()
    {
        Log::info('Notification Event');
        $post = Post::find($body) ?? '';
        $user = User::find($user_id) ?? '';
        if($action === "share"){
            Log::info("Share Event");
            $this->actionType = $action;
            $this->userPhoto = $user->profile_photo ?? '';
            // $this->userName = $post->user->name ?? '';
            $this->userName = $user->name;
            $this->postImg = $post->post_photo ?? '';
            $this->userDesc = $post->post_description ?? '';
            $this->postTitle = $post->post_title ?? '';
            $this->userId = $user->id;
            $this->authUser = Auth::user()->id;
            $this->postUserId = $post->user_id;
        }else{
            Log::info('Like Event');
            $this->actionType = $action;
            $this->userPhoto = $user->profile_photo ?? '';
            // $this->userName = $post->user->name ?? '';
            $this->userName = $user->name;
            $this->postImg = $post->post_photo ?? '';
            $this->userDesc = $post->post_description ?? '';
            $this->postTitle = $post->post_title ?? '';
            $this->userId = $user->id;
            $this->authUser = Auth::user()->id;
            $this->postUserId = $post->user_id;
        }
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
