<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The :attribute is required',
            'price.required' => 'The :attribute is required',
            'description.required' => 'The :attribute is required',
            'category_id.required' => 'The :attribute is required',

        ];
    }
}
