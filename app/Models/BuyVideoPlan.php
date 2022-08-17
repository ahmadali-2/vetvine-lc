<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyVideoPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'transaction_id',
        'amount',
        'user_id',
        'video_id',
        'created_at',
        'updated_at'
    ];
}
