<?php

namespace App\Http\Controllers\Admins\Members;

use App\Http\Controllers\Controller;
use App\Models\Generals\Member;
use App\Models\MemberPermission;
use App\Models\MemberTypes;
use Illuminate\Http\Request;

class MemberTypeController extends Controller
{
    public function MemberTypes(){

        $membertype = MemberTypes::all();
        return view('admins.members.membertype',compact('membertype'));
    }
    public function MemberPermissions($id){
        $data = MemberPermission::where('membertype_id' , $id)->first();

        return view('admins.members.memberpermissions',compact('id','data'));
    }
    public function MemberStatus(Request $request)
    {
            $id = $request->memberId;
                $data = MemberPermission::where('membertype_id' , $id)->get();
                if(!$data->isEmpty()){
                    if($request->name == 'view_ads'){
                        if($request->checkbox1 == 'true'){
                        MemberPermission::where('membertype_id',$id)->update([
                            'view_ads'  => '1',
                        ]);
                        }else if($request->checkbox1 == 'false'){
                            MemberPermission::where('membertype_id',$id)->update([
                                'view_ads'  => '0',
                            ]);
                        }
                    }
                    if($request->name == 'comments'){

                         if($request->checkbox2 == 'true'){
                        MemberPermission::where('membertype_id',$id)->update([
                            'comments'  => '1',
                        ]);
                        }else if($request->checkbox2 == 'false'){
                            MemberPermission::where('membertype_id',$id)->update([
                                'comments'  => '0',
                            ]);
                        }
                    }
                }else{
                    // dd('j');
                    $newMember = new MemberPermission();
                    if($request->name == 'view_ads'){
                        if($request->checkbox1 == 'true'){

                            $newMember->view_ads = '1';
                        }
                        else if($request->checkbox1 == 'false'){
                            $newMember->view_ads = '0';
                        }
                    }
                    if($request->name == 'comments'){
                        if($request->checkbox2 == 'true'){

                            $newMember->comments = '1';
                        }
                        else if($request->checkbox2 == 'false'){
                            $newMember->comments = '0';
                        }
                    }
                    $newMember->membertype_id = $id;
                    $newMember->save();
                }
            return  response()->json(['response' => 'success']);

    }
}
