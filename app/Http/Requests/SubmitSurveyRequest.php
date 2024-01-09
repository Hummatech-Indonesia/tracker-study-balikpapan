<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitSurveyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'graduation_year' => 'required|numeric',
            'name' => 'required',
            'phone_number' => 'required',
            'activity' => 'required',
            'current_activity' => 'required',
            'email' => 'required|email',
            'facebook' => 'facebook',
            'url_address' => 'required',
            'city' => 'required',
            'alumni_gathering' => 'required|boolean'
        ];
    }
}
