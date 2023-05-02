<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'tuition' => 'required|numeric|min:0',
            'duration' => 'required|integer',
            'application_fee' => 'required|numeric|min:0',
            'description' => 'required|string',
            'commission' => 'required|integer',
            'admission_requirements' => 'required|string',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title field is required',
            'application_fee.min' => 'The application fee must be minimum 0'
        ];
    }
}
