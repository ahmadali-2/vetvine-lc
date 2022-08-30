<?php

namespace App\Providers;

use App\Models\Admins\Webinar\BuyEventPlan;
use App\Models\Admins\Webinar\Event;
use App\Models\PushNotification;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('hasPermission', function ($permission) {
            if($permission == "1"){
                return true;
            }
        });

        Blade::if('pastevents', function ($eventid) {
            $event=Event::with('sponsers', 'members', 'user')->find($eventid);
            if(date('Y-m-d H:i:s', strtotime(''.$event->date.''.$event->time.'')) <= date('Y-m-d H:i:s')){
                return false;
            }
            else{
                return true;
            }
        });

        Blade::if('checkAdmin', function ($adminId) {
            if($adminId == 1 || $adminId == 9 || $adminId == 10 || $adminId == 11 || $adminId == 12){
                return true;
            }else{
                return false;
            }
        });
    }
}
