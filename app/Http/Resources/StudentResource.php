<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->user_id,
            'id_data' => $this->id,
            'major' => $this->classroom->major->name,
            'school_year' => $this->classroom->schoolYear->name,
            'name' => $this->user->name,
            'email' => $this->user->email,
            'classroom' => $this->classroom->name,
            'classroom_id' => $this->classroom->id,
            'national_student_id' => $this->national_student_id,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
            'status' => $this->status,
            'phone_number' => $this->user->phone_number ? $this->user->phone_number : "-",
            'address' => $this->user->address ? $this->user->address : "-",
            'photo' => isset($this->user->photo) ? asset('storage/' . $this->user->photo) : asset('default-male.png')
        ];
    }
}
