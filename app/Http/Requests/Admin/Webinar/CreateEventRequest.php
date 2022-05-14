<?php

namespace App\Http\Requests\Admin\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
            'event_title'               => ['required','string'],
            'tags'                      => ['required','string'],
            'category_id'               => ['required'],
            'pdf_file'                  => ['required'],
            'main_photo'                => ['required'],
            'Vet_Pet_Prof_Fee'          => ['required','numeric','min:0'],
            'Pet_Owner_Premium_Fee'     => ['required','numeric','min:0'],
            'Pet_Owner_Fee'             => ['required','numeric','min:0'],
            'Vet_Pet_Prof_Premium'      => ['required','numeric','min:0'],
        ];
    }
    public function messages()
    {
        return [
            'event_title.required'               => 'Event Title Field Is Required',
            'tags.required'                      => 'Keywords Field Is Required',
            'category_id.required'               => 'Category Field Is Required',
            'pdf_file.required'                  => 'PDF Field Is Required',
            'main_photo.required'                => 'Photo Field Is Required',
            'Vet_Pet_Prof_Fee.required'          => 'Vet Pet Prof Fee Field Is Required',
            'Pet_Owner_Premium_Fee.required'     => 'Pet Owner Premium Fee Field Is Required',
            'Pet_Owner_Fee.required'             => 'Pet Owner Fee Field Is Required',
            'Vet_Pet_Prof_Premium.required'      => 'Vet Pet Prof Premium Field Is Required',
        ];

    }
}
