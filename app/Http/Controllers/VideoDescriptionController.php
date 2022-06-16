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
        $category = $request->category;
        $sponser = $request->sponser;
        $presenter = $request->presenter;
        $title = $request->title;

        if (!empty($category && $sponser && $presenter && $title)) {
            $data = VideosOnDemand::whereHas('sponsers', function ($q) use ($sponser) {
                $q->where('sponsers_id', $sponser);
            })->where('category_id', $category)
                ->where('video_title', 'LIKE', '%' . $request->title . "%")
                ->where('presented_by', 'LIKE', '%' . $request->presenter . "%")
                ->get();
        } else if ($title != null && $presenter === null && $sponser === null && $category === null) {
            $data = VideosOnDemand::whereHas('sponsers')
                ->where('video_title', 'LIKE', '%' . $title . "%")
                ->get();
        } else if ($presenter != null && $title === null && $sponser === null && $category === null) {
            $data = VideosOnDemand::whereHas('sponsers')
                ->where('presented_by', 'LIKE', '%' . $presenter . "%")
                ->get();
        } else if ($category != null && $title === null && $presenter === null && $sponser === null) {
            $data = VideosOnDemand::whereHas('sponsers')
                ->where('category_id', $category)
                ->get();
        } else if ($category === null) {
            $data = VideosOnDemand::whereHas('sponsers', function ($q) use ($sponser) {
                $q->where('sponsers_id', $sponser);
            })->where('video_title', 'LIKE', '%' . $title . "%")
                ->where('presented_by', 'LIKE', '%' . $presenter . "%")
                ->get();
        } else if ($presenter === null) {
            $data = VideosOnDemand::whereHas('sponsers', function ($q) use ($sponser) {
                $q->where('sponsers_id', $sponser);
            })->where('video_title', 'LIKE', '%' . $title . "%")
                ->where('category_id', $category)
                ->get();
        } else if ($title === null) {
            $data = VideosOnDemand::whereHas('sponsers', function ($q) use ($sponser) {
                $q->where('sponsers_id', $sponser);
            })
                ->where('category_id', $category)
                ->get();
        } else {
            $data = VideosOnDemand::whereHas('sponsers')->where('category_id', $category)
                ->where('video_title', 'LIKE', '%' . $title . "%")
                ->where('presented_by', 'LIKE', '%' . $presenter . "%")
                ->get();
        }

        return response()->json([
            'html' => view('frontend.pages.search_videos', compact('data'))->render(),
        ]);
    }
}
