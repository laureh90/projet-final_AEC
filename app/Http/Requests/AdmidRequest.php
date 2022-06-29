<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmidRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'category' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The :attribute is required',
            'email.required' => 'The :attribute is required',
            'password.required' => 'The :attribute is required',
            'category.required' => 'The :attribute is required',

        ];
    }
}
