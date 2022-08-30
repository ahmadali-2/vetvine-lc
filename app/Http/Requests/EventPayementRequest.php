<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventPayementRequest extends FormRequest
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
            'card_number'         => ['required', 'number', 'min:1' ,'max:16'],
            'cvc_number'          => ['required', 'number', 'min:1' ,'max:3'],
            'exp_month'           => ['required','number'],
            'exp_year'            => ['required','number'],

        ];
    }

    public function messages(){
        return [
            'card_number.required'       => 'Card Number is required',
            'card_number.number'         => 'Card Number Must Be Number',
            'cvc_number.required'        => 'CVC Number is required',
            'cvc_number.number'          => 'CVC Must Be Number',
            'exp_month.required'         => 'Expired Month is required',
            'exp_year.required'          => 'Expired Year is required',

        ];
    }
}
