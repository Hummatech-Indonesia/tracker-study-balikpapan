<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryAlumniUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'photo' => 'nullable|image',
            'title' => 'required|max:255',
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
            'photo.image' => 'Foto harus berupa gambar!',
            'photo.requiimred' => 'Foto wajib di isi!',
            'title.required' => 'Judul wajib di isi!',
            'title.max' => 'Judul maksimal :max karakter!',
        ];
    }

}
