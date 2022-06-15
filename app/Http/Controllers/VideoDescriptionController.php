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
        $title = $request->title;
        $category_id = $request->category;
        $presenter = $request->presenter;
        $sponsor = $request->sponser;

        $title = VideosOnDemand::where('video_title', 'LIKE', '%' . $title . "%")
            ->orWhere('category_id', $category_id)
            ->orWhere('presented_by', 'LIKE', '%' . $presenter . "%")
            ->get();

            // VideosOnDemand::with('category')->get()->dd();
    }
}
