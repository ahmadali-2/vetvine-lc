<?php

namespace App\Models\Admins\Forum;

use App\Models\PushNotification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Controllers\PushNotificationController
// use App\Models\PushNotification;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'forum_id',
        'user_id',
        'post_title',
        'post_description',
        'post_photo',
        'post_link',
        'status',
        'post_add_video',
    ];

    public function rules()
    {
        return Post::$rules;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function isAuthUserLikedPost()
    {
        return $this->likes()->where('user_id', auth()->id())->where('like', 1)->exists();
    }

    public function push_notifications()
    {
        return $this->hasMany(PushNotification::class, 'post_id');
    }

}
