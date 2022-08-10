<?php

namespace App\Http\Controllers\Admins\Members;

use App\Http\Controllers\Controller;
use App\Models\MemberPermission;
use App\Models\MemberTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MemberTypeController extends Controller
{
    public function MemberTypes()
    {

        $membertype = MemberTypes::with('userTypeCheck')->where('id','!=',1)->get();
        // dd($membertype[0]->userTypeCheck->count());
        return view('admins.members.membertype', compact('membertype'));
    }
    public function MemberPermissions($id)
    {
        $data = MemberPermission::where('membertype_id', $id)->first();
        return view('admins.members.memberpermissions', compact('id', 'data'));
    }
    public function MemberStatus(Request $request)
    {
        $id = $request->memberId;
        $data = MemberPermission::where('membertype_id', $id)->get();
        if (!$data->isEmpty()) {
            if ($request->name == 'view_ads') {
                if ($request->checkbox1 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'view_ads' => '1',
                    ]);
                } else if ($request->checkbox1 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'view_ads' => '0',
                    ]);
                }
            }

            if ($request->name == 'likes') {
                if ($request->checkbox4 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'likes' => '1',
                    ]);
                } else if ($request->checkbox4 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'likes' => '0',
                    ]);
                }
            }
            if ($request->name == 'shares') {
                if ($request->checkbox5 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'shares' => '1',
                    ]);
                } else if ($request->checkbox5 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'shares' => '0',
                    ]);
                }
            }
            if ($request->name == 'comments') {

                if ($request->checkbox2 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'comments' => '1',
                    ]);
                } else if ($request->checkbox2 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'comments' => '0',
                    ]);
                }
            }
            if ($request->name == 'licensure') {

                if ($request->checkbox3 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'licensure' => '1',
                    ]);
                } else if ($request->checkbox3 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'licensure' => '0',
                    ]);
                }
            }
            if ($request->name == 'dashboard') {

                if ($request->checkbox6 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'dashboard' => '1',
                    ]);
                } else if ($request->checkbox6 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'dashboard' => '0',
                    ]);
                }
            }
            if ($request->name == 'ads') {

                if ($request->checkbox7 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'ads' => '1',
                    ]);
                } else if ($request->checkbox7 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'ads' => '0',
                    ]);
                }
            }
            if ($request->name == 'webinars') {

                if ($request->checkbox8 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'webinars' => '1',
                    ]);
                } else if ($request->checkbox8 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'webinars' => '0',
                    ]);
                }
            }
            if ($request->name == 'forums') {

                if ($request->checkbox9 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'forums' => '1',
                    ]);
                } else if ($request->checkbox9 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'forums' => '0',
                    ]);
                }
            }
            if ($request->name == 'videos') {

                if ($request->checkbox10 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'videos' => '1',
                    ]);
                } else if ($request->checkbox10 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'videos' => '0',
                    ]);
                }
            }
            if ($request->name == 'manage') {

                if ($request->checkbox11 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'manage' => '1',
                    ]);
                } else if ($request->checkbox11 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'manage' => '0',
                    ]);
                }
            }
            if ($request->name == 'settings') {

                if ($request->checkbox12 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'settings' => '1',
                    ]);
                } else if ($request->checkbox12 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'settings' => '0',
                    ]);
                }
            }
            if ($request->name == 'membership_plans') {

                if ($request->checkbox13 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'membership_plans' => '1',
                    ]);
                } else if ($request->checkbox13 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'membership_plans' => '0',
                    ]);
                }
            }
            if ($request->name == 'member_level') {

                if ($request->checkbox14 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'member_level' => '1',
                    ]);
                } else if ($request->checkbox14 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'member_level' => '0',
                    ]);
                }
            }
            if ($request->name == 'manage_users') {

                if ($request->checkbox15 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'manage_users' => '1',
                    ]);
                } else if ($request->checkbox15 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'manage_users' => '0',
                    ]);
                }
            }
            if ($request->name == 'coupons') {

                if ($request->checkbox16 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'coupons' => '1',
                    ]);
                } else if ($request->checkbox16 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'coupons' => '0',
                    ]);
                }
            }
            if ($request->name == 'mail_to_users') {

                if ($request->checkbox17 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'mail_to_users' => '1',
                    ]);
                } else if ($request->checkbox17 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'mail_to_users' => '0',
                    ]);
                }
            }
            if ($request->name == 'guest_registration_fee') {

                if ($request->checkbox18 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'guest_registration_fee' => '1',
                    ]);
                } else if ($request->checkbox18 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'guest_registration_fee' => '0',
                    ]);
                }
            }
            if ($request->name == 'static_pages') {

                if ($request->checkbox19 == 'true') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'static_pages' => '1',
                    ]);
                } else if ($request->checkbox19 == 'false') {
                    MemberPermission::where('membertype_id', $id)->update([
                        'static_pages' => '0',
                    ]);
                }
            }
        } else {
            $newMember = new MemberPermission();
            if ($request->name == 'view_ads') {
                if ($request->checkbox1 == 'true') {

                    $newMember->view_ads = '1';
                } else if ($request->checkbox1 == 'false') {
                    $newMember->view_ads = '0';
                }
            }
            if ($request->name == 'comments') {
                if ($request->checkbox2 == 'true') {

                    $newMember->comments = '1';
                } else if ($request->checkbox2 == 'false') {
                    $newMember->comments = '0';
                }
            }
            if ($request->name == 'licensure') {
                if ($request->checkbox3 == 'true') {

                    $newMember->licensure = '1';
                } else if ($request->checkbox3 == 'false') {
                    $newMember->licensure = '0';
                }
            }
            $newMember->membertype_id = $id;
            $newMember->save();
        }
        return response()->json(['response' => 'success']);

    }
}
