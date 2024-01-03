<?php

namespace App\Services;

use App\Enums\RoleEnum;
use App\Enums\StatusEnum;
use App\Services\StudentService;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Contracts\Interfaces\Auth\RegisterInterface;

class StudentService
{

/**
 * store
 *
 * @param  mixed $request
 * @return array
 */
    public function store(StudentRequest $request, RegisterInterface $user)
    {
        $data = $request->validated();
        $data['email_verified_at'] = now();
        $data['password'] = bcrypt($data['password']);
        $user = $user->store($data);
        $user->student()->create($data);
        $user->assignRole(RoleEnum::STUDENT);
    }

     /**
     * update
     *
     * @param  mixed $request
     * @return array
     */
    public function update(UpdateStudentRequest $request): array
    {
        $data = $request->validated();
        if ($data['password'] != null) {
            return [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'national_student_id' => $data['national_student_id'],
                'gender' => $data['gender'],
                'classroom_id' => $data['classroom_id'],
                'birth_date' => $data['birth_date'],
                'password' => bcrypt($data['password']),
            ];
        } else {
            return [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'national_student_id' => $data['national_student_id'],
                'gender' => $data['gender'],
                'classroom_id' => $data['classroom_id'],
                'birth_date' => $data['birth_date'],
            ];
        }
    }
}
