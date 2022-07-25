<?php

namespace App\Services\Shared;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\VetvineHelpers\VetVineHelperClass;
use Exception;
use vetvineHelper;
use Validator;


class ManageProfileService
{

    protected $parent;

    public function __construct(Controller $parent)
    {
        $this->parent = $parent;
    }


    public function updateProfile($request)
    {

        $currentUser = User::where('type', '=', $request->user_type)->where('email', $request->email)->first();
        if (!empty($request->current_password)) {
            if (!empty($request->password && $request->confirmpassword)) {
                $request->validate([
                    'password' => 'required|min:8',
                    'confirmpassword' => 'required|same:password',
                ]);
                if (!empty($request->current_password)) {
                    if (Hash::check($request->current_password, $currentUser->password)) {
                        $newpassword = Hash::make($request->password);
                        $this->parent->successMessage("Your Password updated successfully");
                    } else {
                        $this->parent->dangerMessage("Your Current password does not match our records");
                        return redirect()->back();
                    }
                } else {
                    $this->parent->dangerMessage("Please enter your Current  password ");
                    return redirect()->back();
                }
            } else {
                $this->parent->dangerMessage("Please enter your Current And New  password ");
                return redirect()->back();
            }
        }

        try {
            $path = public_path('admin/generalsetting/');
            if(!empty($request->profile_photo)) {
                $result = VetVineHelper::updateImage($request->profile_photo, $currentUser->profile_photo, $path);
                $this->parent->successMessage("Your Profile Photo updated successfully");
            } else {
                $result = vetvineHelper::saveImage($request->profile_photo, $path);
            }
            $currentUser->update([
                'name'          => $request->name,
                'email'         => $request->email,
                'profile_photo' => $result,
                'network_id'    => $currentUser->networklevel,
                'type'          => $currentUser->type,
                'password'      => (!empty($newpassword)) ? $newpassword : $currentUser->password,
            ]);
            Auth::login($currentUser);
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->back();
        }
        return 'updated';
    }
}
