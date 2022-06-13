<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Admins\Forum\Post;
use App\Models\User;

class NotificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $userName;
    public $userDesc;

    public $postTitle;

    public $userPhoto;

    public $postImg;


    // public $likes;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $post_id)
    {
        // dd($likes);
        $post = Post::find($post_id);
        $user = User::find($user_id);
        $this->userPhoto = $user->profile_photo;
        $this->userName = $post->user->name;
        $this->postImg = $post->post_photo;
        $this->userDesc = $post->post_description;
        $this->postTitle = $post->post_title;
        // $this->likes = $likes;
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
