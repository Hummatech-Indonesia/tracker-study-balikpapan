<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortofolioRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'description' => 'required',
            'photo' => 'required|array',
            'photo.*' => 'required  '
        ];
    }
}
