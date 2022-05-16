<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducationDegree extends Model
{
    use HasFactory;
    protected $fillable = [
        'degree_id',
        'user_id'
    ];
}
