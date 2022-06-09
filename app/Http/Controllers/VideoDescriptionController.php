<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoDescriptionController extends Controller
{
    public function video_desc()
    {
        return view('frontend.video_detail');
    }
}
