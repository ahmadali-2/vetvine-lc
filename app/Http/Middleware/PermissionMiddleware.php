<?php

namespace App\Http\Middleware;

use App\Models\Generals\Member;
use App\Models\MemberPermission;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $routeData)
    {
        $user = Auth::user();
        $permission = MemberPermission::where('membertype_id', $user->type)->first();
        if (str_contains($routeData, 'dashboard')) {
            if (!User::hasPermission($permission->dashboard)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'ads')) {
            if (!User::hasPermission($permission->ads)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'forums')) {
            if (!User::hasPermission($permission->forums)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'videos')) {
            if (!User::hasPermission($permission->videos)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'manage')) {
            if (!User::hasPermission($permission->manage)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'settings')) {
            if (!User::hasPermission($permission->settings)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'membership_plans')) {
            if (!User::hasPermission($permission->membership_plans)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'member_level')) {
            if (!User::hasPermission($permission->member_level)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'manage_users')) {
            if (!User::hasPermission($permission->manage_users)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'coupons')) {
            if (!User::hasPermission($permission->coupons)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'mail_to_users')) {
            if (!User::hasPermission($permission->mail_to_users)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'guest_registration_fee')) {
            if (!User::hasPermission($permission->guest_registration_fee)) {
                abort(403);
            }
        } else if (str_contains($routeData, 'static_pages')) {
            if (!User::hasPermission($permission->static_pages)) {
                abort(403);
            }
        } else {
        }

        return $next($request);
    }
}
