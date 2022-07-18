<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LicensureController extends Controller
{
    public function licensure(Request $request)
    {
        dd($request->network_id);
        $network_id = $request->networkId;
        $user = User::where('id', Auth::id())->where('network_id', $network_id)->first();
        dd($user->network_id);
        return $user;
    }
}
