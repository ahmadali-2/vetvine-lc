<?php

namespace App\Http\Requests\VetvineUsers\MyProfile;

use Illuminate\Foundation\Http\FormRequest;

class PersonelInfoRequest extends FormRequest
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
            'firstname'  =>  'required',
            'lastname'   =>  'required',
            'licensure'  =>  'required',
            'referredby' =>  'required',

        ];
    }
    public function messages()
    {
        return [
            'firstname.required'    =>  'Firstname field is Required.',
            'lastname.required'     =>  'Lastname field is Required.',
            'licensure.required'    =>  'Licensure field is Required.',
            'referredby.required'   =>  'Referredby field is Required.',
        ];
    }
}
