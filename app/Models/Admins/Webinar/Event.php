<?php

namespace App\Models\Admins\Webinar;

use App\Models\User;
use App\Models\Webinar\BuyEventPlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'event_title',
        'tags',
        'event_add_ytlink',
        'sponser_one',
        'sponser_one_url',
        'sponser_two',
        'sponser_two_url',
        'sponser_three',
        'sponser_three_url',
        'date',
        'time',
        'presenter_one',
        'presenter_one_url',
        'presenter_two',
        'presenter_two_url',
        'presenter_three',
        'presenter_three_url',
        'event_description',
        'main_photo',
        'vet_pet_prof_fee',
        'pet_owner_premium_fee',
        'pet_owner_fee',
        'vet_pet_prof_premium_fee',
        'status',
    ];
    public function events()
    {
        return $this->belongsTo(CategoryEvent::class,"category_id");
    }
    public function buymemberships()
    {
        return $this->hasMany(BuyEventPlan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
