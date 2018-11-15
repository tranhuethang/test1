<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditStaffRequest extends FormRequest
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
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Please enter fullname',
            'username.required' => 'Please enter username',
            'email.required' => 'Please enter email'
        ];
    }
}
