<?php

namespace App\Services\Auth;

use App\Enums\RoleEnum;
use App\Http\Requests\RegisterRequest;
use App\Contracts\Interfaces\RegisterInterface;

class RegisterService
{
    /**
     * Handle school registration form
     *
     * @param RegisterRequest $request
     * @param RegisterInterface $register
     * @return void
     */

    public function handleRegistration(RegisterRequest $request, RegisterInterface $register): void
    {
        $data = $request->validated();
        $password = bcrypt($data['password']);

        $user = $register->storeRegister([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $password,
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
        ]);
    }
}
