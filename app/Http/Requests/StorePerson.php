<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerson extends FormRequest
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
            'firstname' => 'required|min:2|max:50',
            'lastname' => 'required|min:2|max:50',
            'snils' => 'required|max:100|min:2',
            'sex' => 'required|min:1|max:1|in:М,Ж',
            'birthdate' => 'required|date',
            'country_id' => 'required',
            'health_status_id' => 'required',
            'with_father' => 'required|in:1,0',
            'with_mother' => 'required|in:1,0',
            'speсiality' => 'required|min:2|max:50',
            'description' => 'required|min:2',
        ];
    }
}
