<?php

namespace App\Models;

use App\Models\Admins\Memberships\BuyMemberShipPlan;
use App\Models\Generals\TimeZone;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserMemberAndNetworkLevel;
use App\Models\VetvineUsers\UserEmploymentInfo;
use App\Models\VetvineUsers\UserSkillsAndExpertise;
use App\Models\VetvineUsers\UserEducation;
use Carbon\Carbon;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'referred_by',
        'licence_no',
        'type',
        'level_id',
        'network_id',
        'provider',
        'provider_id',
        'social_profile_photo',
        'email_verified_at',
        'status',
        'status_update_date',
        'last_status_update_date',
        'is_searchable',
        'is_show_profileviewers',
        'invites_other_users',
        'is_invitable',
        'last_login_date',
        'last_update_date',
        'longitude',
        'credits_left',
        'creation_ip',
        'last_login_ip',
        'timezone_id',
        'locale_id',
        'blocked_search',
        'profile_privacy',
        'profile_posting_privacy',

    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    //check user network level
    public function userNetworkLevel()
    {
        return $this->belongsTo(UserMemberAndNetworkLevel::class, 'network_id');
    }

    public function userSkillsAndExpertise()
    {
        return $this->hasMany(UserSkillsAndExpertise::class);
    }
    public function userEducation()
    {
        return $this->hasOne(UserEducation::class);
    }
    public function employmentInfo()
    {
        return $this->hasOne(UserEmploymentInfo::class);
    }

    public function timezone()
    {
        return $this->belongsTo(TimeZone::class, 'timezone_id');

    }

    public function usermembership()
    {
        return $this->hasOne(BuyMemberShipPlan::class);
    }
    public function posts()
    {

        return $this->hasMany(Post::class);
    }

    public function generateTwoFactorCode()
    {
    $this->timestamps = false;
    $this->two_factor_code = rand(100000, 999999);
    $this->two_factor_expires_at = now()->addMinutes(10);
    $this->save();
    }
}
