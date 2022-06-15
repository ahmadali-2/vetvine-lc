<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
     public function checkType()
    {
        $userType = Auth::user();

        if($userType->status != 1) {
            Auth::logout();
            parent::successMessage('Your Account Registered Successfully');
            parent::warningMessage('Your Account Approval Is Pending From Admin Side');
            return redirect('/');
        }

        switch ($userType->type) {
            
            case 1:
                parent::successMessage("Super Admin Login Successfully");
                return redirect('superadmin/dashboard');
                break;
            case 2:
                parent::successMessage("Vetvine Member Login Successfully");

                if($userType->employmentInfo){
                    if($userType->employmentInfo->profile_status == 'completed'){
                        return redirect()->route('member_home');
                        break;
                    }else{
                        return redirect('vetvine-member/dashboard');
                        break;
                    }
                }else{
                    return redirect('vetvine-member/dashboard');
                    break;
                }

            default:
                parent::dangerMessage("Your Role Connot be Accessed Please Try Again");
                return redirect('/');
        }
    }
}
