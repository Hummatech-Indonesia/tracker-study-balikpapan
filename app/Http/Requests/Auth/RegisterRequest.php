<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\Rules\GenderRule;
use App\Rules\RoleRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required',
            'address' => 'required',
            'classroom_id' => 'required|exists:classrooms,id',
            'national_student_id' => 'required',
            'birth_date' => 'required|date',
            'gender' => ['required', new GenderRule],
            'role' => ['required', new RoleRule],
            'phone_number' => 'required',
        ];
    }

    /**
     * message
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kolom nama harus diisi.',
            'name.max' => 'Kolom nama tidak boleh lebih dari 255 karakter.',

            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Kolom email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email tersebut sudah digunakan oleh pengguna lain.',

            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Password harus memiliki setidaknya 8 karakter.',
            'password.same' => 'Password dan konfirmasi password harus sama.',

            'password_confirmation.required' => 'Kolom konfirmasi password harus diisi.',

            'address.required' => 'Kolom alamat harus diisi.',

            'phone_number.required' => 'Kolom nomor telepon harus diisi.',

            'role.required' => 'Role wajib diisi',
        ];
    }
}
