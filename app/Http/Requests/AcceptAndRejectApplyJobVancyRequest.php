<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcceptAndRejectApplyJobVancyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'message.required' => 'Pesan wajib di isi',
        ];
    }
}
