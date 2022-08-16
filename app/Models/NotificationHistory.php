<?php

namespace App\Models;

use App\Models\Admins\Forum\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','post_id','action_by','action','is_read','updated_at','created_at','type'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function actionBy(){
        return $this->belongsTo(User::class, 'action_by');
    }
}
