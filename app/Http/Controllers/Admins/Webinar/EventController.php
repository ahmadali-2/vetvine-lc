<?php

namespace App\Http\Controllers\Admins\Webinar;

use App\Http\Controllers\Controller;
use App\Http\Middleware\VetvineUsersRole;
use Illuminate\Http\Request;
use App\Models\Admins\Webinar\Event;
use App\Models\Admins\Webinar\CategoryEvent;
use App\Models\Admins\Webinar\ReviewRating;
use App\Models\Admins\Webinar\SponserTable;
use App\Models\Sponser;
use App\VetvineFacades\VetvineHelperFacade;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        $event = Event::with('events', 'sponsermember', 'events', 'sponsers', 'members')->get();
        return view('admins.webinars.index', compact('event'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventcategory = CategoryEvent::all();
        $sponser = SponserTable::get();
        return view('admins.webinars.create', compact('eventcategory', 'sponser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        try {
            $user   = Auth::user()->id;
            $path   = public_path('admin/eventss/');
            $result = vetvineHelper::saveImage($request->main_photo, $path);
            $input  = $request->all();
            $event = Event::create([
                "category_id"                   =>   $input['category_id'],
                "user_id"                       =>   $user,
                "event_title"                   =>   ucwords($input['event_title']),
                "tags"                          =>   $input['tags'],
                "main_photo"                    =>   $result,
                "event_add_ytlink"              =>   $input['event_add_ytlink'],
                "date"                          =>   $input['date'],
                "time"                          =>   $input['time'],
                "presenter_one"                 =>   ucwords($input['presenter_one']),
                "presenter_one_url"             =>   $input['presenter_one_url'],
                "presenter_two"                 =>   ucwords($input['presenter_two']),
                "presenter_two_url"             =>   $input['presenter_two_url'],
                "presenter_three"               =>   ucwords($input['presenter_three']),
                "presenter_three_url"           =>   $input['presenter_three_url'],
                "event_description"             =>   ucfirst($input['event_description']),
                "vet_pet_prof_fee"              =>   $input['vet_pet_prof_fee'],
                "pet_owner_premium_fee"         =>   $input['pet_owner_premium_fee'],
                "pet_owner_fee"                 =>   $input['pet_owner_fee'],
                "vet_pet_prof_premium_fee"      =>   $input['vet_pet_prof_premium_fee'],
                "timezone_url"                  =>   $input['timezone_url']
            ]);
            if ($event->wasRecentlyCreated) {
                foreach ($request['sponser_id'] as $sponser) {
                    Sponser::create([
                        "sponserable_id"   =>  $event->id,
                        "sponserable_type" => 'App\Models\Admins\Webinar\Event',
                        'sponser_id'       => $sponser,
                    ]);
                }
            }
            $compaign_folder = VetvineHelperFacade::getMailchimpMarketing()->campaignFolders->create(["name" => ucwords($input['event_title'])]);
            Event::find($event->id)->update(['compaign_folder' => '' . $compaign_folder->id]);
            $tags = explode(',', $input['tags']);
            foreach ($tags as $tag) {
                $data = array(
                    'name' => $tag,
                    'options' =>
                    array(
                        'match' => 'any',
                        'conditions' =>
                        array(
                            array(
                                "field" => "timestamp_opt",
                                "op" =>  "greater",
                                "value" => "date",
                                "extra" => "2021-01-01"
                            ),
                        ),
                    ),
                );

                $segment = VetvineHelperFacade::getMailchimpMarketing()->lists->createSegment(env('MAILCHIMP_LIST_ID'), $data);

                // dd($segment);

                // $segment_opt = array(
                //     'saved_segment_id' => $segment->id,
                //     'prebuilt_segment_id' => 'subscribers-female',
                // );

                $segment_opt = [
                    'name' => $segment->name,
                    'options' => [
                        'match' => $segment->options->match,
                        'conditions' => [
                            0 => [
                                "condition_type" => $segment->options->conditions[0]->condition_type,
                                "field" => $segment->options->conditions[0]->field,
                                "op" => $segment->options->conditions[0]->op,
                                "value" => $segment->options->conditions[0]->value,
                                "extra" => $segment->options->conditions[0]->extra,
                            ],
                        ],
                    ],
                ];
                // dd($segment_opt);

                $data = array(
                    "recipients" => array(
                        "list_id" => env('MAILCHIMP_LIST_ID'),
                        // "segment_opts" => $segment_opt
                    ),
                    "type" => "regular",
                    "settings" => array(
                        "subject_line" => "Subject",
                        "title" => "Webinar Compaign",
                        "reply_to" => env('mail_from_address'),
                        "template_id" => '' . env('MAILCHIMP_TEMPLATE_ID'),
                        "from_name" => env('APP_NAME'),
                        "folder_id" => $compaign_folder->id
                    )
                );
                // dump($data);
                // dd(VetvineHelperFacade::getMailchimpMarketing()->campaigns->create($data));
                //Created compaign in a folder of compaigns.
                //Curl REquest

                $data = [
                    "recipients" => ["list_id" => env('MAILCHIMP_LIST_ID'), "segment_opts" => $segment_opt],
                    "type" => "regular",
                    "settings" => [
                        "subject_line" => "Subject",
                        "title" => "Title",
                        "reply_to" => "test@gmail.com",
                        "from_name" => "Test"
                    ]
                ];
                $data = json_encode($data);
                $curl = curl_init();
                curl_setopt_array($curl, [
                    //Sample url
                    CURLOPT_URL => "https://us17.api.mailchimp.com/3.0/campaigns",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => $data,
                    CURLOPT_USERPWD => "apikey:2a0bdb46d30cc5f7e5e6b748a52c82c3-us17"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    $response = $err;
                }
                $camId = json_decode($response, true);
                //End


                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://$dc.api.mailchimp.com/3.0/campaigns/'.$camId['id'].'/actions/send',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_USERPWD => "apikey:2a0bdb46d30cc5f7e5e6b748a52c82c3-us17"
                ));

                $respons = curl_exec($curl);

                curl_close($curl);
            }
            parent::successMessage('Event saved successfully.');
            return redirect(route('webinars.index'));
        } catch (Exception $e) {
            Log::info('mailchimp Log:' . $e);
            dd($e);
            parent::dangerMessage("Continue Education Event Does Not Created, Please Try  Again");
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $event = Event::find($id);
            $eventcategory = CategoryEvent::all();
            $sponser = SponserTable::all();
            $selectedMembers    =   $event->sponsers->pluck('sponser_id')->toArray();
            return view('admins.webinars.edit', compact('event', 'sponser', 'eventcategory', 'selectedMembers'));
        } catch (Exception $e) {
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
        try {
            $user   = Auth::user()->id;
            $event  = Event::find($id);
            $path   = public_path('admin/eventss/');
            $result = vetvineHelper::updateImage($request->main_photo_update, $event->main_photo, $path);
            $event->update([
                "category_id"                   =>   $request->input('category_id'),
                "user_id"                       =>   $user,
                "event_title"                   =>   $request->input('event_title'),
                "tags"                          =>   $request->input('tags'),
                "main_photo"                    =>   $result,
                "event_add_ytlink"              =>   $request->input('event_add_ytlink'),
                "date"                          =>   $request->input('date'),
                "time"                          =>   $request->input('time'),
                "presenter_one"                 =>   $request->input('presenter_one'),
                "presenter_one_url"             =>   $request->input('presenter_one_url'),
                "presenter_two"                 =>   $request->input('presenter_two'),
                "presenter_two_url"             =>   $request->input('presenter_two_url'),
                "presenter_three"               =>   $request->input('presenter_three'),
                "presenter_three_url"           =>   $request->input('presenter_three_url'),
                "event_description"             =>   $request->input('event_description'),
                "vet_pet_prof_fee"              =>   $request->input('vet_pet_prof_fee'),
                "pet_owner_premium_fee"         =>   $request->input('pet_owner_premium_fee'),
                "pet_owner_fee"                 =>   $request->input('pet_owner_fee'),
                "vet_pet_prof_premium_fee"      =>   $request->input('vet_pet_prof_premium_fee'),
                'timezone_url'                  =>   $request->input('timezone_url')
            ]);
            $selectedMembers    =   $event->sponsers->pluck('id')->toArray();
            Sponser::whereIn('id', $selectedMembers)->delete();
            foreach ($request['sponser_id'] as $sponser) {
                Sponser::create([
                    "sponserable_id"   =>  $event->id,
                    "sponserable_type" => 'App\Models\Admins\Webinar\Event',
                    'sponser_id'       => $sponser,
                ]);
            }
            parent::successMessage('Event updated successfully.');
            return redirect(route('webinars.index'));
        } catch (Exception $e) {
            // dd($e->getMessage());
            parent::dangerMessage("Continue Education Event Does Not Updated, Please Try  Again");
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
            $event = Event::find($id);
            $event->delete();
            parent::successMessage('Event Deleted Successfully.');
            return redirect()->route('webinars.index');
        } catch (Exception $e) {
            parent::dangerMessage("Event Does Not Deleted, Please Try  Again");
            return redirect()->back();
        }
    }
}
