<?php

namespace App\Services\Auth;

use App\Enums\RoleEnum;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
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

        $user = $register->store($data);
        event(new Registered($user));
        $user->assignRole(RoleEnum::ALUMNI->value);
    }
}
