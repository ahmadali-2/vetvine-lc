<?php

namespace App\Http\Controllers;

use App\Models\TermAndCondiition;
use Illuminate\Http\Request;
use App\Http\Requests\TermsRequest;

class StaticPageController extends Controller
{

    public function TermsAndConditionsAdd()
    {
        // return  'working';
        return view('admins.staticpages.termscondition.add',[
            'terms' => TermAndCondiition::where('page_title', '!=', '')->orWhere('page_desc', '!=', '')->first()
        ]);
    }

    public function TermsAndConditionsAddDb(TermsRequest $request)
    {
        $request->validated();
        TermAndCondiition::where('page_title', '!=', '')->orWhere('page_desc', '!=', '')->update([
            'page_title' => $request->page_title,
            'page_desc'  => $request->pageDesc
        ]);

        parent::successMessage(' Data added successfully.');
        return redirect()->back();
    }


}
