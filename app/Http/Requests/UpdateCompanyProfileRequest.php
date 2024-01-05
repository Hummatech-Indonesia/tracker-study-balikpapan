<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyProfileRequest extends FormRequest
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
            'email' => 'required|max:255|email|unique:users,email,' . auth()->user()->id,
            'company_field' => 'required',
            'website' => 'nullable|url',
            'description' => 'required',
            'address' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kolom nama wajib diisi.',
            'name.max' => 'Panjang nama tidak boleh lebih dari :max karakter.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.max' => 'Panjang email tidak boleh lebih dari :max karakter.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
            'company_field.required' => 'Kolom bidang perusahaan wajib diisi.',
            'website.url' => 'Format URL website tidak valid.',
            'description.required' => 'Kolom deskripsi wajib diisi.',
            'address.required' => 'Kolom alamat wajib diisi.',
        ];
    }
}
