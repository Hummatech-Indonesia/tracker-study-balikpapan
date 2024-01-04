<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryAlumniRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'photo' => 'required|array',
            'photo.*' => 'required|image',
            'title' => 'required|array',
            'title.*' => 'required|max:255',
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
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Email Tidak Valid!',
            'password.required' => 'Password Wajib Diisi!'
        ];
    }
}
