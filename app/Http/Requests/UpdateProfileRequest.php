<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{

/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profile' => 'nullable|mimes:png,jpg,jpeg',
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
            'profile.required' => 'Foto Profile wajib diisi',
            'profile.mimes' => 'Foto Profile harus berformat png, jpg, ataupun jpeg',
        ];
    }
}
