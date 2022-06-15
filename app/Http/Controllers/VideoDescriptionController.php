<?php

namespace App\Http\Controllers;

use App\Models\Admins\VideosonDemand\VideosOnDemand;
use Illuminate\Http\Request;

class VideoDescriptionController extends Controller
{
    public function video_desc($id, $category)
    {
        return view('frontend.video_detail', [
            'videos' => VideosOnDemand::find($id),
            'more_info' => VideosOnDemand::where('category_id', $category)->get(),
        ]);
    }

    public function video_search(Request $request)
    {
        // return $request;
        $category = $request->category;
        $sponser = $request->sponser_id;
        $data = VideosOnDemand::whereHas('sponsers', function ($q) use ($sponser) {
            $q->where('sponsers_id', $sponser);
        })->where('category_id', $category)->where('video_title','LIKE','%'.$request->title."%")->where('presented_by','LIKE','%'.$request->presenter."%")->get();
        return $data;
    }
}
