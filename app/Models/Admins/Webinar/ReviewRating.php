<?php

namespace App\Models\Admins\Webinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRating extends Model
{
    use HasFactory;
    protected $fillable=['event_id','user_id','star_rating','comments'];

}
