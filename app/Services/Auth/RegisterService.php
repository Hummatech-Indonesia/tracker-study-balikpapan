<?php

namespace App\Services\Auth;

use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\RoleEnum;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\RegisterCompanyRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use Illuminate\Auth\Events\Registered;

class RegisterService
{
    /**
     * Handle school registration form
     *
     * @param RegisterRequest $request
     * @param RegisterInterface $register
     * @return void
     */

    public function handleRegistration(RegisterRequest $request, RegisterInterface $register, StudentInterface $student): void
    {

        $data = $request->validated();
        $user = $register->store($data);

        event(new Registered($user));

        $user->assignRole(RoleEnum::ALUMNI->value);
        Mail::to($request->email)->send(new RegistrationMail(['email' => $request->email, 'user' => $request->name, 'id' => $user->id]));
        $student->store([
            'user_id' => $user->id,
            'is_graduate' => 1,
            'classroom_id' => $data['classroom_id'],
            'national_student_id' => $data['national_student_id'],
            'birth_date' => $data['birth_date'],
            'gender' => $data['gender'],
        ]);
    }

    /**
     * handleRegistrationCompany
     *
     * @param  mixed $request
     * @param  mixed $register
     * @param  mixed $company
     * @return void
     */
    public function handleRegistrationCompany(RegisterCompanyRequest $request, RegisterInterface $register, CompanyInterface $company): void
    {
        $data = $request->validated();
        $user = $register->store($data);

        event(new Registered($user));
        Mail::to($request->email)->send(new RegistrationMail(['email' => $request->email, 'user' => $request->name, 'id' => $user->id]));

        $user->assignRole(RoleEnum::COMPANY->value);
        $company->store([
            'user_id' => $user->id,
            'description' => $data['description'],
        ]);
    }
}
