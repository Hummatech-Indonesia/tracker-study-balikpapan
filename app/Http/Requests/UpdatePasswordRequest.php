<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => 'required|current_password:sanctum',
            'password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required|min:8|same:password',
        ];
    }

    /**
     * Custom Validation Messages
     *
     * @return array<string, mixed>
     */

    public function messages(): array
    {
        return [
            'password.required' => 'Kata sandi baru harus diisi.',
            'password.min' => 'Kata sandi baru harus memiliki minimal :min karakter.',
            'password.same' => 'Konfirmasi kata sandi tidak sesuai dengan kata sandi baru.',
            'password_confirmation.same' => 'Konfirmasi kata sandi tidak sesuai dengan kata sandi baru.',
            'password_confirmation.required' => 'Konfirmasi kata sandi harus diisi.',
            'password_confirmation.min' => 'Konfirmasi kata sandi harus memiliki minimal 8 karakter.',
            'current_password.required' => 'Password sebelumnya wajib diisi',
            'current_password.current_password' => 'Password sebelumnya yang anda inputkan salah',
        ];
    }
}
