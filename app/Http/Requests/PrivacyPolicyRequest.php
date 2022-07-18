<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrivacyPolicyRequest extends FormRequest
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
            'page_title' => ['required', 'string', 'max:255'],
            'pageDesc'   => 'required'
        ];
    }

    public function messages(){
        return [
            'page_title.required'  => 'Page Title Is Required',
            'page_title.string'    => 'Page Title Must Be A String',
            'page_title.max'       => 'Page Title Must Be At Least 255 Characters',
            'pageDesc.required'    => 'Page Description Is Required'

        ];
    }
}
