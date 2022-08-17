<?php

namespace App\Models\Admins\VideosonDemand;

use App\Models\Admins\Webinar\CategoryEvent;
use App\Models\Admins\Webinar\SponserTable;
use App\Models\VideoRating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosOnDemand extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'video_title',
        'video_description',
        'video_link',
        'post_add_video',
        'presented_by',
        'status',
        'category_id',
        'sponser_id',
        'isDeleted',
        'average_rating',
        'vet_pet_prof_fee',
        'pet_owner_premium_fee',
        'pet_owner_fee',
        'vet_pet_prof_premium_fee'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryEvent::class, 'category_id');
    }

    public function sponsers()
    {
        return $this->belongsToMany(SponserTable::class, 'videos_on_demands_sponser_tables', 'video_id', 'sponsers_id');
    }

    public function starts(){
        return $this->hasMany(VideoRating::class);
    }

}
