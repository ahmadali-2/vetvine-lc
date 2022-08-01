<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontendUser
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
        if(!Auth::check()){
            return $next($request);
        }elseif(Auth::check()){
            if(Auth::user()->type == 1){
                return redirect()->route('admindashboard');
            }
            else if(Auth::user()->type == 9){
                return redirect()->route('admindashboard');
            }
            else if(Auth::user()->type == 10){
                return redirect()->route('admindashboard');
            }
            else if(Auth::user()->type == 11){
                return redirect()->route('admindashboard');
            }
            else if(Auth::user()->type == 12){
                return redirect()->route('admindashboard');
            }
            else{
              return $next($request);
            }
      }else{
          return redirect()->back();
      }
    }
}
