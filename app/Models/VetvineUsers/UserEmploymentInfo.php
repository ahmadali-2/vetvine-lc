<?php

namespace App\Models\VetVineUsers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmploymentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'professional_position',
        'employment_status',
        'street_address',
        'business_name',
        'business_email',
        'country',
        'state',
        'city',
        'zip_code',
        'work_phone',
        'details',
    ];
}
