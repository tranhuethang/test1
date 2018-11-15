<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStaffRequest extends FormRequest
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
            'password' => 'required',
            'email' => 'required',
            'description' => 'required',
            'notify_to' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Please enter fullname',
            'username.required' => 'Please enter username',
            'password.required' => 'Please enter password',
            'email.required' => 'Please enter email',
            'description.required' => 'Please enter description',
            'notify_to.required' => 'Please enter notify to'
        ];
    }
}
