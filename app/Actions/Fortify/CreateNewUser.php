<?php

namespace App\Actions\Fortify;

use App\Events\UserRegistered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Http\VetvineTraits\UserDetailTrait;
use Illuminate\Support\Facades\Auth;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, UserDetailTrait;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

       Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         ])->validate();


       $user = User::create([
            'name'              => $input['first_name'] .' '. $input['last_name'] ,
            'email'             => $input['email'],
            'password'          => Hash::make($input['password']),
            'network_id'        => $input['networklevel'],
            'timezone_id'       => $input['timezone'],
            'type'              => 2,
            'status'            => 1
        ]);


         $this->checkUserDetail($user->email, $user->type);
         Auth::login($user);
         event(new UserRegistered($user));
         try {
        } catch (\Throwable $th) {
             return $user;
         }
         return $user ;

    }
}
