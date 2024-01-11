<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortofolioRequest extends FormRequest
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
            'year'=>'required|max:4',
            'description' => 'required',
            // 'photo' => 'required|array',
            // 'photo.*' => 'required'
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
             'year.required' => 'Tahun Wajib Diisi',
             'year.max' => 'Tahun Maksimal 4 Karakter',
             'name.required' => 'Nama Wajib Diisi',
             'name.max' => 'Nama Tidak Boleh Lebih Dari 225 Karakter',
             'description.required' => 'Deskripsi Wajib Diisi'
        ];
    }
}
