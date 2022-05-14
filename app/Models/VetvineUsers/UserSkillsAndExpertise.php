<?php

namespace App\Models\VetvineUsers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkillsAndExpertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'skills_expertise_id',
        'user_id'
    ];

}
