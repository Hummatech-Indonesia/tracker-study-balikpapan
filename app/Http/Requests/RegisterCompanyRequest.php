<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCompanyRequest extends FormRequest
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
            'phone_number' => 'required|numeric',
            'description' => 'required',
            'company_field' => 'nullable',
            'other_company' => 'nullable',
            'website' => 'nullable|url',
            'checked' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kolom nama harus diisi.',
            'name.max' => 'Panjang nama tidak boleh melebihi 255 karakter.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Panjang email tidak boleh melebihi 255 karakter.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Panjang password minimal 8 karakter.',
            'password.same' => 'Konfirmasi password tidak sesuai.',
            'password_confirmation.required' => 'Kolom konfirmasi password harus diisi.',
            'phone_number.required' => 'Kolom nomor telepon harus diisi.',
            'phone_number.numeric' => 'Nomor telepon harus berupa angka.',
            'description.required' => 'Kolom deskripsi harus diisi.',
            'website.url' => 'Format URL website tidak valid.',
            'checked.required' => 'Kolom tercentang harus diisi.',
        ];
    }

}
