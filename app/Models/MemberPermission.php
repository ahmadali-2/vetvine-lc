<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'membertype_id',
        'view_ads',
        'comments',
        'dashboard',
        'ads',
        'webinars',
        'forums',
        'videos',
        'manage',
        'settings',
        'membership_plans',
        'member_level',
        'manage_users',
        'coupons',
        'guest_registration_fee',
        'static_pages'
    ];
    public function memberPermission()
    {
        return $this->belongsTo(MemberTypes::class, 'membertype_id');
    }
}
