<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTimesheetRequest extends FormRequest
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
            'date' => 'required',
            'work' => 'required',
            'problem' => 'required',
            'plan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Please choose date',
            'work.required' => 'Please enter work',
            'problem.required' => 'Please enter problem',
            'plan.required' => 'Please enter plan'
        ];
    }
}