<?php

namespace App\Http\Controllers\Admins\Webinar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins\Webinar\Event;
use App\Models\Admins\Webinar\CategoryEvent;
use Exception;
use Symfony\Component\Console\Input\Input;
use vetvineHelper;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::with('events')->get();
        return view('admins.webinars.index',compact('event'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventcategory = CategoryEvent::all();
        return view('admins.webinars.create', compact('eventcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->item_type == 'publications'){
        $path   = public_path('admin/eventss/');
        $result = vetvineHelper::saveImage($request->main_photo, $path);
        $path   = public_path('admin/eventss/');
        $file   = vetvineHelper::saveImage($request->pdf_file, $path);
        $input  = $request->all();
        try{
            Event::create([
                "item_type"                     =>   $input['item_type'],
                "category_id"                   =>   $input['category_id'],
                "event_title"                   =>   ucwords($input['event_title']),
                "tags"                          =>   $input['tags'],
                "pdf_file"                      =>   $file,
                "main_photo"                    =>   $result,
                "event_description"             =>   ucfirst($input['event_description']),
                "Vet_Pet_Prof_Fee"              =>   $input['Vet_Pet_Prof_Fee'],
                "Pet_Owner_Premium_Fee"         =>   $input['Pet_Owner_Premium_Fee'],
                "Pet_Owner_Fee"                 =>   $input['Pet_Owner_Fee'],
                "Vet_Pet_Prof_Premium"          =>   $input['Vet_Pet_Prof_Premium'],
            ]);
            parent::successMessage('Event saved successfully.');
            return redirect(route('webinars.index'));
        } catch(Exception $e) {
            dd($e->getMessage());
            parent::dangerMessage("Publication Event Does Not Created, Please Try  Again");
            return redirect()->back();
        }
    }elseif($request->item_type == 'continue_edu'){
        $path   = public_path('admin/eventss/');
        $result = vetvineHelper::saveImage($request->main_photo, $path);
        $path   = public_path('admin/eventss/');
        $file   = vetvineHelper::saveImage($request->pdf_file, $path);
        $path   = public_path('admin/eventss/');
        $video  = vetvineHelper::saveImage($request->event_add_video, $path);
        $input  = $request->all();
        try{
            Event::create([
                "item_type"                     =>   $input['item_type'],
                "category_id"                   =>   $input['category_id'],
                "event_title"                   =>   ucwords($input['event_title']),
                "tags"                          =>   $input['tags'],
                "pdf_file"                      =>   $file,
                "main_photo"                    =>   $result,
                "event_add_ytlink"              =>   $input['event_add_ytlink'],
                "event_add_vimeolink"           =>   $input['event_add_vimeolink'],
                "event_add_video"               =>   $video,
                "sponser_one"                   =>   ucwords($input['sponser_one']),
                "sponser_two"                   =>   ucwords($input['sponser_two']),
                "sponser_three"                 =>   ucwords($input['sponser_three']),
                "date"                          =>   $input['date'],
                "time"                          =>   $input['time'],
                "presenter_one"                 =>   ucwords($input['presenter_one']),
                "presenter_one_url"             =>   $input['presenter_one_url'],
                "presenter_two"                 =>   ucwords($input['presenter_two']),
                "presenter_two_url"             =>   $input['presenter_two_url'],
                "presenter_three"               =>   ucwords($input['presenter_three']),
                "presenter_three_url"           =>   $input['presenter_three_url'],
                "event_description"             =>   ucfirst($input['event_description']),
                "Vet_Pet_Prof_Fee"              =>   $input['Vet_Pet_Prof_Fee'],
                "Pet_Owner_Premium_Fee"         =>   $input['Pet_Owner_Premium_Fee'],
                "Pet_Owner_Fee"                 =>   $input['Pet_Owner_Fee'],
            ]);
            parent::successMessage('Event saved successfully.');
            return redirect(route('webinars.index'));
        } catch(Exception $e) {
            dd($e->getMessage());
            parent::dangerMessage("Continue Education Event Does Not Created, Please Try  Again");
            return redirect()->back();
        }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $event = Event::find($id);
            $eventcategory = CategoryEvent::all();
            return view('admins.webinars.edit',compact('event' ,'eventcategory'));
        } catch(Exception $e) {
            parent::dangerMessage("Event Does Not Edited, Please Try  Again");
            return $e->getMessage();
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
        if ($request->item_type == 'publications') {
            try {
                $event  = Event::find($id);
                $path   = public_path('admin/eventss/');
                $result = vetvineHelper::updateImage($request->main_photo, $event->main_photo, $path);
                $path   = public_path('admin/eventss/');
                $file   = vetvineHelper::updateImage($request->pdf_file, $event->pdf_file, $path);
                $event->update([
                "event_title"                   =>   $request->input('event_title'),
                "tags"                          =>   $request->input('tags'),
                "category_id"                   =>   $request->input('category_id'),
                "pdf_file"                      =>   $file,
                "main_photo"                    =>   $result,
                "event_description"             =>   $request->input('event_description'),
                "Vet_Pet_Prof_Fee"              =>   $request->input('Vet_Pet_Prof_Fee'),
                "Pet_Owner_Premium_Fee"         =>   $request->input('Pet_Owner_Premium_Fee'),
                "Pet_Owner_Fee"                 =>   $request->input('Pet_Owner_Fee'),
                "Vet_Pet_Prof_Premium"          =>   $request->input('Vet_Pet_Prof_Premium'),
            ]);
                parent::successMessage('Event updated successfully.');
                return redirect(route('webinars.index'));
            } catch (Exception $e) {
                parent::dangerMessage(" Publications Event Does Not Updated, Please Try  Again");
                return redirect()->back();
            }
        } elseif($request->item_type == 'continue_edu'){
            try {
            $event  = Event::find($id);
            $path   = public_path('admin/eventss/');
            $result = vetvineHelper::updateImage($request->main_photo, $event->main_photo, $path);
            $path   = public_path('admin/eventss/');
            $file   = vetvineHelper::saveImage($request->pdf_file, $event->pdf_file, $path);
            $path   = public_path('admin/eventss/');
            $video  = vetvineHelper::saveImage($request->event_add_video, $event->event_add_video, $path);
            $event->update([
                    "item_type"                     =>   $request->input('item_type'),
                    "category_id"                   =>   $request->input('category_id'),
                    "event_title"                   =>   $request->input('event_title'),
                    "tags"                          =>   $request->input('tags'),
                    "pdf_file"                      =>   $file,
                    "main_photo"                    =>   $result,
                    "event_add_ytlink"              =>   $request->input('event_add_ytlink'),
                    "event_add_vimeolink"           =>   $request->input('event_add_vimeolink'),
                    "event_add_video"               =>   $video,
                    "sponser_one"                   =>   $request->input('sponser_one'),
                    "sponser_two"                   =>   $request->input('sponser_two'),
                    "sponser_three"                 =>   $request->input('sponser_three'),
                    "date"                          =>   $request->input('date'),
                    "time"                          =>   $request->input('time'),
                    "presenter_one"                 =>   $request->input('presenter_one'),
                    "presenter_one_url"             =>   $request->input('presenter_one_url'),
                    "presenter_two"                 =>   $request->input('presenter_two'),
                    "presenter_two_url"             =>   $request->input('presenter_two_url'),
                    "presenter_three"               =>   $request->input('presenter_three'),
                    "presenter_three_url"           =>   $request->input('presenter_three_url'),
                    "event_description"             =>   $request->input('event_description'),
                    "Vet_Pet_Prof_Fee"              =>   $request->input('Vet_Pet_Prof_Fee'),
                    "Pet_Owner_Premium_Fee"         =>   $request->input('Pet_Owner_Premium_Fee'),
                    "Pet_Owner_Fee"                 =>   $request->input('Pet_Owner_Fee'),
                ]);
                parent::successMessage('Event updated successfully.');
                return redirect(route('webinars.index'));
            } catch (Exception $e) {
                dd($e->getMessage());
                parent::dangerMessage("Continue Education Event Does Not Updated, Please Try  Again");
                return redirect()->back();
            }
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
        try{
            $event = Event::find($id);
            $event->delete();
            parent::successMessage('Event deleted successfully.');
            return redirect()->route('webinars.index');
        }catch(Exception $e) {
            parent::dangerMessage("Event Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
