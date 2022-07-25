<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_password'                   => ['required','min:8'],
            'password'                           => ['required','min:8'],
            'confirmpassword'                    => ['required', 'min:8','same:password'],
        ];
    }
    public function messages()
    {
        return [
            'current_password.required'          => 'Current password is required',
            'current_password.min'               => 'Current password must be at least 8 characters',
            'password.required'                 => 'Password is required',
            'password.min'                      => 'Password must be at least 8 characters',
            'confirmpassword.required'          => 'Confirm password is required',
            'confirmpassword.min'               => 'Confirm password must be at least 8 characters',
            'confirmpassword.same'              => 'Confirm password must be same as password',
        ];

    }
}
