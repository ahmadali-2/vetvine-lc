<?php

namespace App\Models\Admins\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'forum_id',
        'post_title',
        'post_description',
        'post_photo',
        'post_link',
        'status',
        'post_add_ytlink',
        'post_add_vimeolink',
        'post_add_video',
    ];

    public function rules()
    {
        return Post::$rules;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
