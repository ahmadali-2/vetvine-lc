<?php

namespace App\Http\Controllers;

use App\Models\TermAndCondiition;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function TermsAndConditions()
    {
        return view('admins.staticpages.termscondition.index', [
            'data' => TermAndCondiition::all()
        ]);
    }

    public function TermsAndConditionsAdd()
    {
        return view('admins.staticpages.termscondition.add');
    }

    public function TermsAndConditionsAddDb(Request $request)
    {
        // return $request;
        TermAndCondiition::create([
            'page_title' => $request->page_title,
            'page_desc' => $request->pageDesc,
        ]);

        parent::successMessage(' Data added successfully.');
        return redirect()->route('TermsAndConditions');
    }
}
