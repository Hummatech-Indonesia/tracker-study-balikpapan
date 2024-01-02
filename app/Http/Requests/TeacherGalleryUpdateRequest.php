<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherGalleryUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'photo' => 'nullable|images',
            'name' => 'required|max:255',
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
            'name.required' => 'Nama wajib di isi',
            'name.max' => 'Nama maksimal :max karakter',
            'photo.images' => 'Foto harus berupa gambar',
        ];
    }
}
