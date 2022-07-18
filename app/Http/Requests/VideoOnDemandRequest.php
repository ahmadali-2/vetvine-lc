<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoOnDemandRequest extends FormRequest
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
            'video_title' => 'required',
            'video_link'  => 'required',
            'presented_by' => 'required',
            'video_description' => 'required',
            'post_add_video' => 'required',
            'category' => 'required',
            'sponser_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'video_title.required' => 'Video Title is required',
            'video_link.required'  => 'Video Link is required',
            'presented_by.required' => 'Presented By is required',
            'video_description.required' => 'Video Description is required',
            'post_add_video.required' => 'Video is required',
            'category.required' => 'Category is required',
            'sponser_id.required' => 'Sponser is required',
        ];
    }
}
