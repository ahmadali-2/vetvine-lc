<?php

namespace App\Http\Controllers\Admins\CMS;

use App\Http\Controllers\Controller;
use App\Models\Admins\CMS\CMSPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CMSController extends Controller
{
    public function index(){
        $title = "CMS Pages";
        $pages = CMSPage::orderBy('id','desc')->get();
        return view('admins.cms.index',compact('pages'));
    }
    public function create(){
        return view('admins.cms.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required'
        ],[
            'title.required' => 'Title Feild Is Required',
            'title.min' => 'Title Length Must Be Greater Than 5 Characters',
            'content.required' => 'Content Is Required'
        ]);

        CMSPage::create([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'content' => $request->content
        ]);
        parent::successMessage('Page created successfully.');
        return redirect()->back();
    }

    public function pages($slug){
        $content = CMSPage::where('slug',$slug)->first();
        return view('frontend.pages.cms.index',compact('content'));
    }
}
