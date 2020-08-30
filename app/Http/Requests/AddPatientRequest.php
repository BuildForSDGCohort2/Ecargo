<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPatientRequest extends FormRequest
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
            'fname' => 'required|min:4',
            'lname' => 'required|min:4',
            'gender' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'dateOfBirth' => 'required',
            'occupation' => 'required',
            'state' => 'required'
        ];
    }
}
