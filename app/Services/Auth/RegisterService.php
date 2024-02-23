<?php

namespace App\Services\Auth;

use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\RoleEnum;
use App\Enums\StatusEnum;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\RegisterCompanyRequest;
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

        $user->assignRole($data['role']);
        if ($data['role'] == RoleEnum::ALUMNI->value) {
            $graduate = 1;
        } else {
            $graduate = 0;
        }

        if (isset($data['school_year_id'])) {
            $school_year = $data['school_year_id'];
        } else {
            $school_year = null;
        }
        if (isset($data['classroom_id'])) {
            $classroom = $data['classroom_id'];
        } else {
            $classroom = null;
        }

        $student->store([
            'user_id' => $user->id,
            'is_graduate' => $graduate,
            'school_year_id' => $school_year,
            'status' => StatusEnum::NONACTIVE->value,
            'classroom_id' => $classroom,
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
        if ($request->other_company != null) {
            $data['company_field'] = $data['other_company'];
        }

        event(new Registered($user));

        $user->assignRole(RoleEnum::COMPANY->value);
        $company->store([
            'user_id' => $user->id,
            'company_field' => $data['company_field'],
            'website' => $data['website'],
            'description' => $data['description'],
        ]);
    }
}
