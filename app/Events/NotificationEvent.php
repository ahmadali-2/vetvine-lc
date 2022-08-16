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
use Symfony\Component\HttpFoundation\File\Exception\NoFileException;

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

    public $sendToAll;


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
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'liked','type' => 'simple'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'liked','type' => 'simple'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'user_id' => $post->user_id,
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'liked',
                        'is_read' => 1,
                        'type' => 'simple'
                    ]);
                }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "liked your post";
                Log::info("Inner Like Post");
            } elseif (isset($data['is_comment'])) {
                //Simple Post Comment
                Log::info('Simple Post Comment');
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'commented','type' => 'simple'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'commented','type' => 'simple'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'user_id' => $post->user_id,
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'commented',
                        'is_read' => 1,
                        'type' => 'simple'
                    ]);
                }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "commented your post";
            } elseif (isset($data['is_create'])) {
                //Simple Post Comment
                Log::info('Simple Post Created');
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'created','type' => 'simple'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'created','type' => 'simple'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'created',
                        'is_read' => 1,
                        'type' => 'simple'
                    ]);
                }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "created a post";
                $this->sendToAll = true;
            } else {
                //Simple Post Create
                Log::info('Simple Post Shared');
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'shared','type' => 'simple'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'shared','type' => 'simple'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'user_id' => $post->user_id,
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'shared',
                        'is_read' => 1,
                        'type' => 'simple'
                    ]);
                }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "shared your post";
            }
        } else {
            Log::info('Shared Post liked');
            $sharePost = Share::find($data['share_id']) ?? '';
            Log::info($sharePost);
            $post = Post::find($sharePost->post_id) ?? '';
            Log::info($post);
            if (isset($data['is_like'])) {
                //Share Post Like
                Log::info('Share Post liked');
                Log::info("Inner Share Like Post");
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'liked','type' => 'shared'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'liked','type' => 'shared'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'user_id' => $post->user_id,
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'liked',
                        'is_read' => 1,
                        'type' => 'shared'
                    ]);
                }

                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                Log::info("Inner Share Like Post");
                $this->actionType = "liked your shared post";
            } else if (isset($data['is_comment'])) {
                //Share Post Comment
                Log::info('Share Post Comment');
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'commented','type' => 'shared'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'commented','type' => 'shared'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                    NotificationHistory::create([
                        'user_id' => $post->user_id,
                        'action_by' => $user->id,
                        'post_id' => $post->id,
                        'action' => 'commented',
                        'is_read' => 1,
                        'type' => 'shared'
                    ]);
                }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "commented your shared post";
            } else {
                //Share Post Create
                Log::info('Share Post created');
                if(NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'shared','type' => 'shared'])->first()){
                    NotificationHistory::where(['user_id'=>$post->user_id, 'post_id' => $post->id, 'action' => 'shared','type' => 'shared'])->update([
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }else{
                NotificationHistory::create([
                    'user_id' => $post->user_id,
                    'action_by' => $user->id,
                    'post_id' => $post->id,
                    'action' => 'shared',
                    'is_read' => 1,
                    'type' => 'shared'
                ]);
            }
                $this->userName = $user->name ?? '';
                $this->userPhoto = $user->profile_photo ?? '';
                $this->postImg = $post->post_photo ?? '';
                $this->userDesc = $post->post_description ?? '';
                $this->postTitle = $post->post_title ?? '';
                $this->postUserId = $post->user_id;
                $this->actionType = "shared your post";
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
