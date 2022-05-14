<?php

namespace App\Models\VetvineUsers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $table = 'posts';

    public $fillable = [
        'postable_id',
        'postable_type',
        'post_title',
        'post_photo',
        'post_description',
        'post_link',
        'status',
        'post_add_ytlink',
        'post_add_vimeolink',
        'post_add_video',
    ];
    public function postable()
    {
        $this->morphTo();
    }
}
