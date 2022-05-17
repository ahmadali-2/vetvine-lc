<?php

namespace App\Models\VetvineUsers;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $table = 'posts';

    public $fillable = [
        'user_id',
        'post_title',
        'post_photo',
        'post_description',
        'post_link',
        'status',
        'post_add_ytlink',
        'post_add_vimeolink',
        'post_add_video',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
