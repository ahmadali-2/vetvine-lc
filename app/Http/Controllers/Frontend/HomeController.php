<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admins\Forum\CategoryForum;
use App\Models\Admins\Forum\Forum;
use App\Models\Admins\Forum\ForumPost;
use App\Models\Admins\Forum\Post;
use App\Models\Admins\VideosonDemand\VideosOnDemand;
use App\Models\Admins\Webinar\CategoryEvent;
use App\Models\Admins\Webinar\Event;
use App\Models\Admins\Webinar\SponserTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Sponser;
use DB;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

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

    public function termsOfService()
    {
        return view('frontend.pages.general.termsofservicecs');
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
        $showevent = Event::with('events', 'sponsers', 'members', 'user')->get();
        $sponser = SponserTable::all();
        $category = CategoryEvent::all();
        return view('frontend.pages.webinars.upcoming-webinars', compact('showevent', 'sponser', 'category'));
    }
    public function pastevent()
    {
        $showevent = Event::with('events')->where('date', '<=', date('Y-m-d'))
            ->orderBy('date')->get();
        $category = CategoryEvent::all();
        return view('frontend.pages.webinars.upcoming-webinars', compact('showevent', 'category'));
    }
    public function upcomingevent()
    {
        $showevent = Event::with('events')->where('date', '>=', date('Y-m-d'))
            ->orderBy('date')->get();
        $category = CategoryEvent::all();
        return view('frontend.pages.webinars.upcoming-webinars', compact('showevent', 'category'));
    }
    public function upcomingWebinarsdetails($id)
    {
        $eventdetail = Event::with('events', 'sponsers', 'members', 'user', 'buyeventplan', 'ReviewData')->find($id);
        $category = CategoryEvent::all();
        return view('frontend.pages.webinars.upcoming-eventsdetails', compact('eventdetail', 'category'));

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
        // $avg = ;
        return view('frontend.pages.videos-on-demand', [
            'videos'   => VideosOnDemand::all(),
            'category' => CategoryEvent::all(),
            'sponsor'  => SponserTable::all(),
            'avg'      => VideosOnDemand::join('video_ratings', 'video_ratings.video_id', 'videos_on_demands.id')
                                        ->avg('video_ratings.rating')
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

    public function changePassword(){
        return view('vetvineUsers.layouts.pages.user_change_password');
    }

    public function updateUserPassword(Request $request){
        // return $request;
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password',
        ]);
        $currentUser =  User::find(Auth::id());
        if($request->current_password){
            if (Hash::check($request->current_password, $currentUser->password)){

                if ($request->password == $request->confirmpassword) {
                    try {
                        $currentUser->update([
                            'password' => Hash::make($request->password),
                        ]);
                        parent::successMessage('Password Updated Successfully');
                        return redirect()->back();
                    } catch (\Exception $e) {
                        return redirect()->back();
                    }
                }else{
                    parent::dangerMessage('New password and confirm password does not match');
                    }
            }else{
                parent::dangerMessage('Current password is incorrect');
                return redirect()->back();
            }
        }
    }
}
