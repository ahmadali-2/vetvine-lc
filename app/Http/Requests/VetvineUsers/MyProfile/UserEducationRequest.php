<?php

namespace App\Http\Requests\VetvineUsers\MyProfile;

use Illuminate\Foundation\Http\FormRequest;

class UserEducationRequest extends FormRequest
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
            'degrees'       =>  'required',
            'schoolname'    =>  'required',
            'gradutionyear' =>  'required',
            'internship'    =>  'required',
            'residency'     =>  'required'
        ];
    }
    public function messages()
    {
        return [
            'degrees.required'          =>  'Degree field is Required.',
            'schoolname.required'       =>  'Schoolname field is Required.',
            'gradutionyear.required'    =>  'Gradutionyear field is Required.',
            'internship.required'       =>  'Internship field is Required.',
            'residency.required'        =>  'Residency field is Required.'
        ];
    }
}
