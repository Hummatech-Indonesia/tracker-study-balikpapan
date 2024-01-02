<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'thumbnail' => 'required|image',
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
           'thumbnail.required' => 'Thumbnail wajib di isi',
           'thumbnail.image' => 'Thumbnail harus berupa gambar',
           'content.required' => 'Konten wajib di isi',
        ];
    }
}
