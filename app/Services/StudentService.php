<?php

namespace App\Services;

use App\Enums\RoleEnum;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Enums\StatusEnum;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\User;
use App\Traits\UploadTrait;

class StudentService
{
    use UploadTrait;
    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(StudentRequest $request, RegisterInterface $user)
    {
        $data = $request->validated();
        $data['photo'] = $this->upload(UploadDiskEnum::PROFILE->value, $request->file('photo'));
        $data['email_verified_at'] = now();
        $data['password'] = bcrypt($data['password']);
        $data['status'] = StatusEnum::ACTIVE->value;
        $data['is_graduate'] = 0;
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
    public function update(StudentUpdateRequest $request, User $user): array
    {
        $data = $request->validated();
        $photo = $user->photo;
        if ($request->hasFile('photo')) {
            $this->remove($photo);
            $photo = $this->upload(UploadDiskEnum::PROFILE->value, $request->file('photo'));
        }
        if ($data['password'] != null) {
            return [
                'name' => $data['name'],
                'photo' => $photo,
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
                'photo' => $photo,
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
