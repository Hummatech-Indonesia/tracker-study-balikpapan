<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolYearRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:9'
        ];
    }

    /**
     * messages
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal 4 karakter'
        ];
    }
}
