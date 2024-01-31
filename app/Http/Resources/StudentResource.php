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
            'name' => $this->user->name,
            'email' => $this->user->email,
            'classroom' => $this->classroom->name,
            'nisn' => $this->national_student_id,
            'gender' => $this->gender,
            'birth_date' => Carbon::parse($this->birth_date)->isoFormat('DD MMMM Y'),
            'status' => $this->status,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'photo' => isset($this->user->photo) ? asset('storage/' . $this->user->photo) : asset('default-male.png')
        ];
    }
}
