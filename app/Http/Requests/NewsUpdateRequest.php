<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'thumbnail' => 'nullable|image',
            'content' => 'required',
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
           'title.required' => 'Judul wajib di isi',
           'title.max' => 'Judul maksimal :max karakter',
           'thumbnail.image' => 'Thumbnail harus berupa gambar',
           'content.required' => 'Konten wajib di isi',
        ];
    }
}
