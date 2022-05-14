<?php

namespace App\Models\VetvineUsers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;
    protected $fillable =   ['user_id','degree_name','other_degree','school','other_school','graduation_year','internship','residency'];
}
