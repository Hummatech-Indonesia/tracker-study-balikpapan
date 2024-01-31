<?php

namespace App\Http\Requests;

use App\Rules\RoleAccountRule;
use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => ['required', RoleAccountRule::class]
        ];
    }
}
