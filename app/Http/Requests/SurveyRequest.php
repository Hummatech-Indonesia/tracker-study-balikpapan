<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after_or_equal:start_at',
            'description' => 'required'
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
            'name.required' => 'Kolom nama harus diisi.',
            'start_at.required' => 'Kolom dimulai pada harus diisi.',
            'start_at.date' => 'Kolom dimulai pada harus berupa tanggal.',
            'end_at.required' => 'Kolom berakhir pada harus diisi.',
            'end_at.date' => 'Kolom berakhir pada harus berupa tanggal.',
            'end_at.after_or_equal' => 'Kolom berakhir pada harus setelah atau sama dengan tanggal dimulai pada.',
            'description.required' => 'Kolom deskripsi harus diisi.',
        ];
    }
}
