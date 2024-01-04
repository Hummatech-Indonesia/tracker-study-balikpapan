<?php

namespace App\Http\Requests;

use App\Rules\GenderRule;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user),
            ],
            'password' => 'nullable|min:6|max:16',
            'phone_number' => 'required|max:20',
            'national_student_id' => 'required|max:10',
            'birth_date' => 'required|date|before_or_equal:' . now()->format('Y-m-d'),
            'gender' => ['required', new GenderRule],
            'address' => 'required|max:255',
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
            'password.required' => 'Kolom password wajib diisi.',
            'password.max' => 'Password tidak boleh lebih dari :max karakter.',
            'password.min' => 'Password tidak boleh kurang dari :min karakter.',
            'phone_number.required' => 'Kolom nomor telepon wajib diisi.',
            'phone_number.max' => 'Kolom nomor telepon tidak boleh lebih dari :max karakter.',
            'national_student_id.required' => 'Kolom nomor induk siswa wajib diisi.',
            'national_student_id.max' => 'Kolom nomor induk siswa tidak boleh lebih dari :max karakter.',
            'birth_date.required' => 'Kolom tanggal lahir wajib diisi.',
            'birth_date.date' => 'Format tanggal lahir tidak valid.',
            'birth_date.before_or_equal' => 'Tanggal lahir tidak boleh lebih dari tanggal sekarang.',
            'gender.required' => 'Kolom jenis kelamin wajib diisi.',
            'address.required' => 'Kolom alamat wajib diisi.',
            'address.max' => 'Kolom alamat tidak boleh lebih dari :max karakter.',
            'classroom_id.required' => 'Kolom kelas wajib diisi.',
            'classroom_id.exists' => 'Kelas yang dipilih tidak valid.',
        ];
    }

}
