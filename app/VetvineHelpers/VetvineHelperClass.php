<?php

namespace App\VetvineHelpers;

use App\Models\Admins\GeneralSetting\GeneralSetting;
use App\Models\ChMessage;
use App\Models\Generals\TimeZone;
use App\Models\MemberPermission;
use App\Models\User;
use App\Models\UserMemberAndNetworkLevel;
use File;
use Illuminate\Support\Facades\Auth;
use MCAPI;

class VetVineHelperClass
{
    private $mailchimp_marketing = null;
    private $mailchimp_transectional = null;
    private $mcapi = null;

    function __Construct(){

        //$this->mcapi = new MCAPI(env('MAILCHIMP_API_KEY'));
        $marketing = new \MailchimpMarketing\ApiClient();
        $transectional = new \MailchimpTransactional\ApiClient();

        $transectional->setApiKey([
            'apiKey' => env('TRANSECTIONAL_MAILCHIMP_KEY'),
            'server' => 'us17',
        ]);
        $marketing->setConfig([
            'apiKey' => env('MAILCHIMP_API_KEY'),
            'server' => 'us17',
        ]);

        $this->mailchimp_marketing = $marketing;
        $this->mailchimp_transectional = $transectional;
    }
    /**
     * @author Muhammad Naveed
     * @github https://github.com/naveed504
     *
     * This class is a generic form of method which are to be used all around the
     * project, for reusability and static behaviour by laravel facades
     *
     * Write down all the generic methods here in this class for flexibility and reusability
     * Please note this class will be autoloaded via composer and injected to the service
     * providers.
     */

    /**
     * get all timezones
     */

    // public function mcApi(){
    //     return $this->mcapi;
    // }

    public function getMailchimpMarketing(){
        return $this->mailchimp_marketing;
    }

    public function getMailchimpTransectional(){
        return $this->mailchimp_transectional;
    }

    public function timezones()
    {
        return $timezones = TimeZone::all();
    }

    public function vetvineGeneralSetting()
    {
        return $vetvineGeneralSetting = GeneralSetting::where('id', 1)->first();
    }
    /**
     * save image for all types of members, network-levels and admins
     */
    public function saveImage($image, $path)
    {
        $getImgPath = $this->checkImagePath($path);
        if (empty($image)) {
            $newImage = '';
        } else {
            $fileName = time() . '.' . $image->clientExtension();
            $image->move($getImgPath, $fileName);
            $newImage = $fileName;
        }
        return $newImage;
    }

    /**
     * update image for all types of members, network-levels and admins
     */
    public function updateImage($formImage, $dbImage, $path)
    {
        $getImgPath = $this->checkImagePath($path);
        if (empty($formImage)) {
            $newImage = $dbImage;
        } else {
            $prepareImgForDelete = $getImgPath . $dbImage;
            if (File::exists($prepareImgForDelete)) {
                File::delete($prepareImgForDelete);
            }
            $fileName = time() . '.' . $formImage->clientExtension();
            $formImage->move($getImgPath, $fileName);
            $newImage = $fileName;
        }
        return $newImage;
    }

    /**
     * check image path . create directory if not exist
     */
    public function checkImagePath($imgpath)
    {
        if (!File::isDirectory($imgpath)) {
            File::makeDirectory($imgpath, 0777, true, true);
        }
        return $imgpath;
    }

    public function networkName($memberId)
    {
        return UserMemberAndNetworkLevel::find($memberId)->value('name');
    }

    public function allUsers()
    {
        return User::with('toMessage', 'fromMessage')->where('id', '!=', Auth::id())->get();
    }

    public function chatifyAdmin()
    {
        return User::with('toMessage', 'fromMessage')->where('id', '!=', Auth::id())->where('type' ,'1')->orWhere('type' ,'9')->orWhere('type' ,'10')->orWhere('type' ,'11')->orWhere('type' ,'12')->get();
    }

    public function chatifyUsers()
    {
        return User::with('toMessage', 'fromMessage')->where('id', '!=', Auth::id())->where('type' ,'!=','1')->where('type' ,'!=','9')->where('type' ,'!=','10')->where('type' ,'!=','11')->where('type' ,'!=','12')->get();
    }

    public function currentUserProfile()
    {
        return User::find(Auth::id());
    }

    public function adminUserMessages()
    {
        return ChMessage::join('users', 'users.id', '=', 'ch_messages.from_id')
            ->select('ch_messages.*', 'users.name')
            ->get();
    }

    public function getUserTypePermissions($type)
    {
        return MemberPermission::where('membertype_id', $type)->first();
    }
}
