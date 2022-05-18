<?php

namespace App\Http\Requests\VetvineUsers\PostManagement;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
            'comment'        =>  'required',
        ];
    }
    public function messages()
    {
        return [
        'comment.required'             => 'The Comment Field is Required',
        ];
    }
}
