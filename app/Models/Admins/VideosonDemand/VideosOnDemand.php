<?php

namespace App\Models\Admins\VideosonDemand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosOnDemand extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'video_title',
        'video_description',
        'video_link',
        'post_add_video',
        'presented_by',
        'status',
    ];
}
