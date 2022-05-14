<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use vetvineHelper;
use App\Models\Admins\Forum\CategoryForum;
use App\Models\Admins\Forum\Forum;
use App\Models\Admins\Forum\ForumPost;
use App\Models\Admins\Webinar\CategoryEvent;
use App\Models\Admins\Webinar\Event;

class HomeController extends Controller
{
    public function frontendHome()
    {
        return view('frontend.home');
    }
    public function whyVetvine(){
        return view('frontend.pages.why-vetvine');
    }
    public function contactUs(){
        return view('frontend.pages.contact-us');
    }
    public function grow(){
        return view('frontend.pages.grow');
    }
    public function thrive(){
        return view('frontend.pages.thrive');
    }
    public function heal(){
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
        $forums     =   Forum::all();
        $categories =   CategoryForum::all();
        return view('frontend.pages.forums.index',compact('forums','categories'));
    }
    public function forumposts($id)
    {
        $posts = ForumPost::where('forum_id',$id)->get();
        $forum = Forum::find($id);
        return view('frontend.pages.forums.forums_post',compact('posts','forum'));
    }
    public function upcomingWebinars()
    {
        $showevent = Event::with('events')->where('item_type','continue_edu')->get();
        $category = CategoryEvent::all();
        return view('frontend.pages.upcoming-webinars',compact('showevent','category'));
    }
    public function publications()
    {
        $publication = Event::with('events')->where('item_type','publications')->get();
        $category = CategoryEvent::all();
        return view('frontend.pages.publications',compact('publication','category'));
    }
    public function searceducations(Request $request)
    {
        $showevent = Event::with('events')->get();
        $category = CategoryEvent::all();
        if ($request->name) {
            $showevent = Event::with('events')->where('event_title', 'like', '%'.request('name').'%')->get();
        }
        if ($request->category) {
            $showevent = Event::with('events')->where('category_id', 'like', '%'.request('category').'%')->get();
        }
        if ($request->presenter) {
            $showevent = Event::with('events')->where('presenter_one', 'like', '%'.request('presenter').'%')->get();
        }
        if ($request->sponser) {
            $showevent = Event::with('events')->where('sponser_one', 'like', '%'.request('sponser').'%')->get();
        }
        if ($request->from && $request->to) {
            $from = $request->from;
            $to   = $request->to;
            $showevent = Event::with('events')->whereBetween('date', [$from, $to])->get();
        }
        if ($request->name && $request->category && $request->presenter && $request->sponser && $request->from && $request->to) {
            $from = $request->from;
            $to   = $request->to;
            $showevent = Event::with('events')->where('event_title', 'like', '%'.request('name').'%')->
                                                where('category_id', 'like', '%'.request('category').'%')->
                                                where('presenter_one', 'like', '%'.request('presenter').'%')->
                                                where('sponser_one', 'like', '%'.request('sponser').'%')->
                                                whereBetween('date', [$from, $to])->get();
        }
        return view('frontend.pages.upcoming-webinars',compact('showevent','category'));
    }


}
