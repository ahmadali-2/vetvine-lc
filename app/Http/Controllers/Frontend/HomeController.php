<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admins\Forum\CategoryForum;
use App\Models\Admins\Forum\Forum;
use App\Models\Admins\Forum\Post;
use App\Models\Admins\Memberships\BuyMemberShipPlan;
use App\Models\Admins\VideosonDemand\VideosOnDemand;
use App\Models\Admins\Webinar\BuyEventPlan;
use App\Models\Admins\Webinar\CategoryEvent;
use App\Models\Admins\Webinar\Event;
use App\Models\Admins\Webinar\SponserTable;
use App\Models\Generals\TimeZone;
use App\Models\User;
use App\Models\VideoRating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    protected $dashboard;
    public function frontendHome()
    {
        return view('frontend.home');
    }

    public function whyVetvine()
    {
        return view('frontend.pages.why-vetvine');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }
    public function grow()
    {
        return view('frontend.pages.grow');
    }

    public function thrive()
    {
        return view('frontend.pages.thrive');
    }

    public function heal()
    {
        return view('frontend.pages.heal');
    }


    public function userdashboard()
    {

        return view('vetvineUsers.MyProfile.dashboard');
    }

    public function Faqs()
    {
        return view('frontend.pages.faqs');
    }

    public function forums()
    {
        $forums = Forum::all();
        $categories = CategoryForum::all();
        return view('frontend.pages.forums.index', compact('forums', 'categories'));
    }

    public function forumposts($id)
    {
        $posts = Post::where('forum_id', $id)->get();
        $forum = Forum::find($id);
        return view('frontend.pages.forums.forums_post', compact('posts', 'forum'));
    }

    public function upcomingWebinars()
    {
        $showevent = Event::with('events', 'sponsers', 'members', 'user')->where('date', '>=',Carbon::now())
        ->orderBy('date')->get();
        $sponser = SponserTable::all();
        $category = CategoryEvent::all();
        return view('frontend.pages.webinars.upcoming-webinars', compact('showevent', 'sponser', 'category'));
    }

    public function updateVideoRating(Request $request){
        if($request->edit_rating_field > 5 || $request->edit_rating_field < 1){
            return response()->json([
                'code' => 400,
                'message' => 'Rating must be valid (1 to 5) stars!',
            ]);
        }
        $video = VideosOnDemand::find($request->edit_video_id);
        $video->update([
            'average_rating' => $request->edit_rating_field,
        ]);
        return response()->json([
            'code' => 200,
            'video_id' => $request->edit_video_id,
            'latest_rating' => $request->edit_rating_field,
            'html' => view('admins.videosondemand.dynamic_stars', ['average_rating' => $video->average_rating])->render(),
            'message' => 'Video rating updated successfully!',
        ],200);
    }
    public function upcomingWebinarsdetails($id)
    {
        $relatedEvents = [];
        $lastEvents = null;
        $eventdetail = Event::with('events', 'sponsers', 'members', 'user', 'buyeventplan', 'ReviewData')->where('id',$id)->first(); // jiki detail
        $tags = $eventdetail->tags;
        $eventTags = explode(',',$tags);
        $count = 0;
        foreach($eventTags as $eventTag){
            $lastEvents = Event::orWhere('tags','like','%'.$eventTag.'%')->get()->toArray(); // more like
            foreach($lastEvents as $event){
                if(auth()->user()){
                    $purchasedEvent =BuyEventPlan::where('user_id',Auth()->user()->id)->where('event_id', $event['id'])->first();
                }
                else{
                    $purchasedEvent =BuyEventPlan::where('event_id', $event['id'])->first();
                }
                if(in_array($event['id'], array_column($relatedEvents, 'id')) == false){
                    if($id != $event['id']){
                        if(isset($purchasedEvent) == false){
                            array_push($relatedEvents, $event);
                        }
                    }
                }
            }
        }
        $youMaylikePost = array_slice($relatedEvents, 0, 4);
        $eventTime = date('Y-m-d H:i:s', strtotime(''.$eventdetail->date.''.$eventdetail->time.''));
        $eventId = $eventdetail->id;
        $category = CategoryEvent::all();
        $authUser = false;
        if(auth()->user()){
            $authUser = true;
        }
        if(auth()->user()){
            $purchasedEvent =BuyEventPlan::where('user_id',auth()->user()->id)->where('event_id', $id)->first();
        }else{
            $purchasedEvent = null;
        }
        return view('frontend.pages.webinars.upcoming-eventsdetails', compact('eventdetail', 'category', 'eventId','authUser','purchasedEvent','eventTime','youMaylikePost'));
    }

    public function loadOtherTimeZones(Request $request){
        $timeZoneArray = [];
        $events = Event::find($request->event_id)->first();
        $timezones = TimeZone::get();
        foreach ($timezones as $timezone) {
            array_push($timeZoneArray, convertToTimeZone($timezone->timezone,date('Y-m-d H:i:s', strtotime(''.$events->date.''.$events->time.'')), trim($timezone->region)));
        }
        return response()->json([
            'code' => 200,
            'html' => view('frontend.pages.webinars.upcoming-event-timezone', compact('timeZoneArray'))->render(),
        ]);
    }

    public function getEventPrice(Request $request){

        $user = User::where('id', auth()->user()->id)->first();

        $eventdetail = Event::with('events', 'sponsers', 'members', 'user', 'buyeventplan', 'ReviewData')->find($request->event_id);

        $data = array();

        $data['user_id'] = auth()->user()->id;

        $data['event_id'] = $request->event_id;

        $data['protocol'] = 'Vetvine Member';

        if($user->type == 4 || $user->type == 5){
            $data['fee'] = $eventdetail->vet_pet_prof_fee;
        }
        else if($user->type == 3){
            $data['fee'] = $eventdetail->pet_owner_fee;
        }
        else if($user->type == 6){
            $data['fee'] = $eventdetail->pet_owner_premium_fee;
            $data['protocol'] = 'Vetvine Premium Membership <br> Subscriber';
        }
        else if($user->type == 7 || $user->type == 8){
            $data['fee'] = $eventdetail->vet_pet_prof_premium_fee;
            $data['protocol'] = 'Vetvine Premium Membership <br> Subscriber';
        }else{
            $data['fee'] = 'Free';
        }

        $data['title'] = $eventdetail->event_title;

        return response()->json([
            'code' => 200,
            'data' => $data,
        ]);
    }

    public function getVideoPrice(Request $request){

        $user = User::where('id', auth()->user()->id)->first();

        $video = VideosOnDemand::find($request->video_id);

        $data = array();

        $data['user_id'] = auth()->user()->id;

        $data['video_id'] = $request->video_id;

        $data['protocol'] = 'Vetvine Member';

        if($user->type == 4 || $user->type == 5){
            $data['fee'] = $video->vet_pet_prof_fee;
        }
        else if($user->type == 3){
            $data['fee'] = $video->pet_owner_fee;
        }
        else if($user->type == 6){
            $data['fee'] = $video->pet_owner_premium_fee;
            $data['protocol'] = 'Vetvine Premium Membership <br> Subscriber';
        }
        else if($user->type == 7 || $user->type == 8){
            $data['fee'] = $video->vet_pet_prof_premium_fee;
            $data['protocol'] = 'Vetvine Premium Membership <br> Subscriber';
        }else{
            $data['protocol'] = 'Vetvine Premium Membership <br> Subscriber';
        }
  }

    public function searceducations(Request $request)
    {
        $this->dashboard['filters'] = Event::with('events');
        $category = CategoryEvent::all();

        if ($request->name) {
            $this->dashboard['filters'] = $this->applyFilters('event_title', $request->name);
        }
        if ($request->category) {
            $this->dashboard['filters'] = $this->applyFilters('category_id', $request->category);
        }
        if ($request->presenter) {
            $this->dashboard['filters'] = $this->applyFilters('presenter_one', $request->presenter);
        }
        // if ($request->sponser) {
        //     $this->dashboard['filters'] = $this->applyFilters('sponser_one', $request->sponser);
        // }
        if ($request->from && $request->to) {
            $this->dashboard['filters'] = $this->aplyDateFilters($request->from, $request->to);
        }
        $showevent = $this->dashboard['filters']->get();
        return view('frontend.pages.webinars.upcoming-webinars', compact('showevent', 'category'));
    }

    public function applyFilters($dbColumn, $formElement)
    {
        if (isset($this->dashboard['filters']) && !empty($this->dashboard['filters'])) {
            $this->dashboard['filters'] = $this->dashboard['filters']->where(function ($query) use ($dbColumn, $formElement) {
                foreach ((array) $formElement as $key => $value) {
                    $query->orWhere($dbColumn, 'like', '%' . $formElement[$key] . '%');
                }
            });
            return $this->dashboard['filters'];
        }
    }

    public function aplyDateFilters($from, $to)
    {
        if (isset($this->dashboard['filters']) && !empty($this->dashboard['filters'])) {
            $this->dashboard['filters'] = $this->dashboard['filters']->where(function ($query) use ($from, $to) {
                $query->whereBetween('date', [$from, $to]);
            });
            return $this->dashboard['filters'];
        }
    }

    public function videosOnDemand()
    {
        $videos = VideosOnDemand::all();
        // $avg = ;
        return view('frontend.pages.videos-on-demand', [
            'videos' => $videos,
            'category' => CategoryEvent::all(),
            'sponsor' => SponserTable::all(),
        ]);

    }
    public function ceArchives()
    {
        return view('frontend.pages.ce-archives');
    }

    public function delete_user(Request $request)
    {
        try {
            User::where('id', $request->id)->update(['blocked_user' => 1]);
            Auth::logout();
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Account Deleted successfully',
                    'code' => 200,
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Something went wrong!',
                    'code' => 400,
                ]
            );
        }
    }

    public function changePassword()
    {
        return view('vetvineUsers.layouts.pages.user_change_password');
    }

    public function updateUserPassword(Request $request)
    {

        $currentUser = User::find(Auth::id());
        if ($request->current_password) {
            if (Hash::check($request->current_password, $currentUser->password)) {

                if ($request->password == $request->confirmpassword) {
                    try {
                        $currentUser->update([
                            'password' => Hash::make($request->password),
                        ]);
                        // dd("stop");
                        parent::successMessage('Password Updated Successfully');
                        return redirect()->back();
                    } catch (\Exception $e) {
                        return redirect()->back();
                    }
                } else {
                    parent::dangerMessage('New password and confirm password does not match');
                }
            } else {
                parent::dangerMessage('Current password is incorrect');
                return redirect()->back();
            }
        }
    }
}
