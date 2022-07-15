<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'video_title' => 'required',
            'video_link'  => 'required',
            'presented_by' => 'required',
            'video_description' => 'required',
            'category' => 'required',
            'sponser_id' => 'required',
            'post_add_video' => 'required|mimes:mp4,mov,ogg|max:20000'
        ];
    }
    public function messages()
    {
        return [
            'video_title.required'              => 'Video Field Is Required',
            'video_link.required'               => 'Video Link Field Is Required',
            'presented_by.required'             => 'Presented By Field Is Required',
            'video_description.required'        => 'Video Description Field Is Required',
            'category.required'                 => 'Category Field Is Required',
            'sponser_id.required'               => 'Sponser Field Is Required',
            'post_add_video.required'            => 'Video File Is Required',
            'post_add_video.mimes'               => 'Video File Format Is Not Allowed',
            'post_add_video.max'                 => 'Video File Size Must be Less than 20 MBS',
        ];

    }
}
