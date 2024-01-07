<?php

namespace App\Http\Requests;

use App\Rules\WorkSystemRule;
use Illuminate\Foundation\Http\FormRequest;

class JobVacancyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'job_title' => 'required',
            'basic_salary' => 'required|numeric',
            'position'=>'required',
            'work_system' => ['required', new WorkSystemRule],
            'description_working_system' => 'required|max:255',
            'qualifications' => 'required|max:255',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'job_title.required' => 'Judul pekerjaan wajib diisi.',
        'basic_salary.required' => 'Gaji pokok wajib diisi.',
        'basic_salary.numeric' => 'Gaji pokok harus berupa angka.',
        'work_system.required' => 'Sistem kerja wajib diisi.',
        'position.required' => 'Posisi wajib diisi',
        'description_working_system.required' => 'Deskripsi sistem kerja wajib diisi.',
        'description_working_system.max' => 'Deskripsi sistem kerja tidak boleh lebih dari :max karakter.',
        'qualifications.required' => 'Kualifikasi wajib diisi.',
        'qualifications.max' => 'Kualifikasi tidak boleh lebih dari :max karakter.',
    ];
}
}
