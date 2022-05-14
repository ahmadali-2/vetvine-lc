<?php

namespace App\Http\Requests\VetvineUsers\MyProfile;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\VetvineUsers\SkillAndExpertise;

class SkillsAndExpertiseRequest extends FormRequest
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
            'skillsandexpertise'  =>  'required'
        ];
    }
    public function messages()
    {
        return [
            'skillsandexpertise.required'  =>  'SkillsAndExpertise field is Required.'
        ];
    }
}
