<?php

namespace App\Http\Requests\Admin\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class CreateContinueEducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event_title'                        => ['required','string'],
            'tags'                               => ['required','string'],
            'category_id'                        => ['required'],
            'pdf_file'                           => ['required'],
            'result'                             => ['required'],
            'event_add_ytlink'                   => ['required'],
            'event_add_vimeolink'                => ['required'],
            'event_add_video'                    => ['required'],
            'sponser_one'                        => ['required'],
            'sponser_two'                        => ['required'],
            'sponser_three'                      => ['required'],
            'date'                               => ['required'],
            'time'                               => ['required'],
            'presenter_one'                      => ['required'],
            'presenter_one_url'                  => ['required'],
            'presenter_two'                      => ['required'],
            'presenter_two_url'                  => ['required'],
            'presenter_three'                    => ['required'],
            'presenter_three_url'                => ['required'],
            'event_description'                  => ['required'],
            'main_photo'                         => ['required'],
            'Vet_Pet_Prof_Fee'                   => ['required','numeric','min:0'],
            'Pet_Owner_Premium_Fee'              => ['required','numeric','min:0'],
            'Pet_Owner_Fee'                      => ['required','numeric','min:0'],
            'Vet_Pet_Prof_Premium'               => ['required','numeric','min:0'],
        ];
    }
    public function messages()
    {
        return [
            'event_title.required'               => 'Title Field Is Required',
            'tags.required'                      => 'Tags Field Is Required',
            'category_id.required'               => 'Category Field Is Required',
            'pdf_file.required'                  => 'PDF Field Is Required',
            'result.required'                    => 'Result Field Is Required',
            'event_add_ytlink.required'          => 'Youtube Link Field Is Required',
            'event_add_vimeolink.required'       => 'Vimeo Link Field Is Required',
            'event_add_video.required'           => 'Video Field Is Required',
            'sponser_one.required'               => 'Sponser One Field Is Required',
            'sponser_two.required'               => 'Sponser Two Field Is Required',
            'sponser_three.required'             => 'Sponser Three Field Is Required',
            'date.required'                      => 'Date Field Is Required',
            'time.required'                      => 'Time Field Is Required',
            'presenter_one.required'             => 'Presenter One Field Is Required',
            'presenter_one_url.required'         => 'Presenter One URL Field Is Required',
            'presenter_two.required'             => 'Presenter Two Field Is Required',
            'presenter_two_url.required'         => 'Presenter Two URL Field Is Required',
            'presenter_three.required'           => 'Presenter Three Field Is Required',
            'presenter_three_url.required'       => 'Presenter Three URL Field Is Required',
            'event_description.required'         => 'Event Description Field Is Required',
            'main_photo.required'                => 'Photo Field Is Required',
            'Vet_Pet_Prof_Fee.required'          => 'Vet Pet Prof Fee Field Is Required',
            'Pet_Owner_Premium_Fee.required'     => 'Pet Owner Premium Fee Field Is Required',
            'Pet_Owner_Fee.required'             => 'Pet Owner Fee Field Is Required',
            'Vet_Pet_Prof_Premium.required'      => 'Vet Pet Prof Premium Field Is Required',
        ];

    }
}
