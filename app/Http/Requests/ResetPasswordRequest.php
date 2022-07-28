<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password'                 => ['required','string','min:8'],
            'password_confirmation'    => ['required','string','min:8','same:password'],
        ];
    }
    public function messages()
    {
        return [
            'password.required'             => 'Password Field Is Required',
            'password.string'               => 'Password Must Be In String Format',
            'password.min'                  => 'Password Min Length 8',
            'password_confirmation.required'=> 'Confirm Password Field Is Required',
            'password_confirmation.string'  => 'Confirm Password Must Be In String Format',
            'password_confirmation.min'     => 'Confirm Password Min Length 8',
            'password_confirmation.same'    => 'Confirm Password Must Be Same With Password',

        ];
    }
}
