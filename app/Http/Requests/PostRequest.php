<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'date_post' => 'required',

        ];
    }

    public function messages(){
        return [
            'title.required' => 'The :attribute is required',
            'description.required' => 'The :attribute is required',
            'date_post.required' => 'The :attribute is required',

        ];
    }
}
