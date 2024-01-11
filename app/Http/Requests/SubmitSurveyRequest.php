<?php

namespace App\Http\Requests;

use App\Rules\ActivityStatusRule;
use Illuminate\Foundation\Http\FormRequest;

class SubmitSurveyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'graduation_year' => 'required|numeric',
            'phone_number' => 'required',
            'activity' => 'required',
            'current_activity' => ['required', new ActivityStatusRule],
            'email' => 'required|email',
            'facebook' => 'required',
            'url_address' => 'required',
            'regency_id' => 'required',
            'alumni_gathering' => 'required|boolean',
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
            'graduation_year.required' => 'Tahun kelulusan wajib diisi.',
            'graduation_year.numeric' => 'Tahun kelulusan harus berupa angka.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'activity.required' => 'Aktivitas wajib diisi.',
            'current_activity.required' => 'Aktivitas saat ini wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format alamat email tidak valid.',
            'facebook.required' => 'Akun Facebook wajib diisi.',
            'url_address.required' => 'Alamat URL wajib diisi.',
            'regency_id.required' => 'Pilih kabupaten/kota wajib diisi.',
            'alumni_gathering.required' => 'Pilihan pertemuan alumni wajib diisi.',
            'alumni_gathering.boolean' => 'Pilihan pertemuan alumni harus berupa true atau false.',
        ];
    }
}
