<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use League\OAuth1\Client\Server\Twitter;
use Session;
use App\Http\VetvineTraits\UserDetailTrait;

class SocialController extends Controller
{
    use UserDetailTrait;

    public function redirect($provider, $usertype, $network)
    {
        $result = ['usertype' => $usertype, 'networktype' => $network];
        $comma_separated = implode(",", $result);
        return Socialite::driver($provider)->with(['state' => $comma_separated])->redirect();
    }

    public function handleProviderCallback(Request $request, $provider)
    {
        $TWITTER_ACCESS_TOKEN = '2778673796-o5lGaXkGkrxLFT7cLuuWfX9aCQ8DLhjqXDcJO49';
        $TWITTER_ACCESS_TOKEN_SECRET = 'S4lSLym8xULxyiSMbdX7TlXpfs8bGGKTUXUOuWwhyrIg3';

        try {
            $fetchUserTypes     = $request->all();
            $userAndNetworkType = explode(",", $fetchUserTypes['state']);
            $user_type = $userAndNetworkType[0];
            $network_type = $userAndNetworkType[1];

            if ($provider == 'twitter') {
                $user = Socialite::driver('twitter')->userFromTokenAndSecret($TWITTER_ACCESS_TOKEN, $TWITTER_ACCESS_TOKEN_SECRET);
            } else {
                $user = Socialite::driver($provider)->stateless()->user();
            }

            $username = explode(' ', $user->name);
            $finduser = User::where('email', $user->email)->first();
            // $finduser = User::where('type', $user_type)->where(function ($q) use ($user, $username) {
            //     $q->where('email', $user->email);
            // })->first();

            if ($finduser) {
                Auth::login($finduser);
                $this->checkuserdetail($finduser->email, $finduser->type);
                return redirect()->route('checkusertype');
            } else {
                $dataPassword = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                $newpassword = substr(str_shuffle($dataPassword), 0);
                $newuser = User::create([
                    'name'           => $user->getName(),
                    'email'          => $user->getEmail(),
                    'image_full_path' => $user->getAvatar(),
                    'provider_id'    => $user->getId(),
                    'provider'       => $provider,
                    'type'           =>  2,
                    'network_id'     => $network_type,
                    'password'       => Hash::make($newpassword),
                ]);
                $newuser->markEmailAsVerified();
                $this->checkuserdetail($newuser->email, $newuser->type);
                Auth::login($newuser);
                return redirect()->route('checkusertype');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



}
