<?php

namespace App\Http\Controllers\Admins\News;

use App\Http\Controllers\Controller;
use App\Models\Admins\News\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admins.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        try {
            $news = News::create([
                "news_title" => ucwords($input['news_title']),
                "news_link" => $input['news_link'],
                "news_description" => ucfirst($input['news_description']),
            ]);
            parent::successMessage('News saved successfully.');
            return redirect(route('news.index'));
        } catch (Exception $e) {
            parent::dangerMessage("News Does Not Created, Please Try  Again");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function frontIndex(Request $request)
    {
        $news = News::paginate(5);
        if($request->ajax()){
            return response()->json([
                'html' => view('frontend.pages.news.filternews',compact('news'))->render(),
            ]);
        }
        return view('frontend.pages.news.index', compact('news'));
    }


    // public function frontDetail($id){
    //     $newsdetail = News::where('id',$id)->first();
    //     return view('frontend.pages.news.detail',compact('newsdetail'));
    // }
    public function newsSearch(Request $request){
        if($request->ajax())
        {
            $news = '';
            $news=News::where('news_title','LIKE','%'.$request->search_field."%")->get();
            return response()->json([
                'html' => view('frontend.pages.news.loop-news',compact('news'))->render(),
            ]);
        }

    }
    public function showmore(Request $request){
        $texttype = $request->show_text;
        $description = $request->show_desc;
        $button_text="";
        if($texttype == 0){
            $texttype = 1;
            $button_text = "Read More";
            $description = substr($description,0,230);
        }
        else{
            $texttype = 0;
            $button_text = "Read Less";
        }
        return response()->json([
            'show_text' => $texttype,
            'description' => $description,
            'button_text' => $button_text,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $news = News::find($id);
            return view('admins.news.edit', compact('news'));
        } catch (Exception $e) {
            parent::dangerMessage("News Does Not Edited, Please Try  Again");
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $news = News::find($id);
        try {
            $news->update([
                "news_title" => ucwords($input['news_title']),
                "news_link" => $input['news_link'],
                "news_description" => ucfirst($input['news_description']),
            ]);
            parent::successMessage('News updated successfully.');
            return redirect(route('news.index'));
        } catch (Exception $e) {
            parent::dangerMessage("News Does Not Updated, Please Try  Again");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            News::find($id)->delete();
            parent::successMessage('News Deleted successfully.');
            return redirect(route('news.index'));
        } catch (Exception $e) {
            parent::dangerMessage("News Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
