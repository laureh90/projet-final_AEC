<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'arrival' => 'required',
            'departure' => 'required_with:arrival|after:arrival',
            'nb_adult' => 'required|min:1'
        ];
    }

    public function messages(){
        return [
            'arrival.required' => 'The arrival date is required',
            'departure.required' => 'The departure date is required',
            'nb_adult.required' => 'You need minumum 1 person',

        ];
    }
}
