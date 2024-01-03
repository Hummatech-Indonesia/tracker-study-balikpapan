<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\StudentInterface;
use App\Enums\StatusEnum;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private StudentInterface $student;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(StudentInterface $student)
    {
        return $this->student = $student;
    }

    public function verificationStudent(Student $student)
    {
        $this->student->update($student->id, ['status' => StatusEnum::NONACTIVE->value]);
        return redirect()->back(null, trans('alert.update_success'));
    }
}
