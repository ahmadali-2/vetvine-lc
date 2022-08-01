<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user =Auth::user();
        switch($user->type){
            case 1:
                return $next($request);
            break;
            case 9:
                return $next($request);
            break;
            case 10:
                return $next($request);
            break;
            case 11:
                return $next($request);
            break;
            case 12:
                return $next($request);
            break;
            default:
                if (strpos(URL::current(), 'superadmin') !== false) {
                    return redirect('/');
                }
            break;
        }
        return $next($request);
    }
}
