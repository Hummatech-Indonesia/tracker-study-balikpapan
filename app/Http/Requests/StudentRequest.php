<?php

namespace App\Http\Requests;

use App\Rules\GenderRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user)],
            'password' => 'required|max:16',
            'phone_number' => 'required|max:255',
            'national_student_id' => 'required|max:10',
            'birth_date' => 'required',
            'gender' => ['required', new GenderRule],
            'address' => 'required',
            'classroom_id' => 'required|exists:classrooms,id',
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
            'name.required' => 'Kolom nama wajib diisi.',
            'name.max' => 'Kolom nama tidak boleh lebih dari :max karakter.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Kolom email tidak boleh lebih dari :max karakter.',
            'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
            'phone_number.required' => 'Kolom nomor telepon wajib diisi.',
            'phone_number.max' => 'Kolom nomor telepon tidak boleh lebih dari :max karakter.',
            'person_responsible.required' => 'Kolom person responsible wajib diisi.',
            'person_responsible.max' => 'Kolom person responsible tidak boleh lebih dari :max karakter.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.max' => 'Password tidak boleh lebih dari :max karakter.',
        ];
    }

}
