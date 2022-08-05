<?php

namespace App\Models;

use App\Models\Admins\VideosonDemand\VideosOnDemand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'video_id',
        'user_id',
        'rating',
    ];
    public function video(){
        return $this->hasOne(VideosOnDemand::class);
    }

}
