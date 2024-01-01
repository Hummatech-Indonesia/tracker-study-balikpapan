<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'school_year_id' => 'required|exists:school_years,id',
            'major_id' => 'required|exists:majors,id',
            'name' => 'required|max:255'
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
            'school_year_id.required' => 'Tahun ajaran wajib diisi',
            'school_year_id.exists' => 'Tahun ajaran tidak valid',
        ];
    }
}
