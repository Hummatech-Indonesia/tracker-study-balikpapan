<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderGalleryAlumniRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'photo' => 'array|required',
            'photo.*' => 'image',
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
            'photo.required' => 'Foto harus di isi!',
            'photo.*.image' => 'Foto harus berupa gambar!',
        ];
    }
}
