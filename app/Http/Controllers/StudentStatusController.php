<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\RoleEnum;
use App\Helpers\ResponseHelper;
use App\Http\Requests\SelectChangeUpdateRequest;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentStatusController extends Controller
{
    private ClassroomInterface $classroom;
    private StudentInterface $student;
    public function __construct(ClassroomInterface $classroom, StudentInterface $student)
    {
        $this->student = $student;
        $this->classroom = $classroom;
    }

    /**
     * index
     *
     * @param  mixed $request
     * @return View
     */
    public function index(Request $request): View
    {
        $classrooms = $this->classroom->customPaginate($request, 8);

        return view('admin.student-classroom', compact('classrooms'));
    }

    /**
     * show
     *
     * @param  mixed $classroom
     * @return View
     */
    public function show(Classroom $classroom, Request $request): View
    {
        $request->merge(['classroom_id' => $classroom->id]);
        $students = $this->student->studentClassroom($request, 10);
        return view('admin.student-status', compact('students', 'classroom'));
    }


    /**
     * changeAlumni
     *
     * @param  mixed $student
     * @return void
     */
    public function changeAlumni(Student $student)
    {
        $data['is_graduate'] = 1;
        $data['role'] = RoleEnum::ALUMNI->value;
        $this->student->update($student->id, $data);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * changeStudent
     *
     * @return void
     */
    public function changeStudent(Student $student)
    {
        $data['is_graduate'] = 0;
        $data['role'] = RoleEnum::STUDENT->value;
        $this->student->update($student->id, $data);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * selectChangeAlumni
     *
     * @param  mixed $student
     * @return void
     */
    public function selectChangeAlumni(SelectChangeUpdateRequest $request)
    {
        $data = $request->validated();
        $this->student->updateSelect(['is_graduate' => 1], $data['select']);
        return ResponseHelper::success(null, trans('alert.update_success'));
    }

    /**
     * selectChangeStudent
     *
     * @param  mixed $request
     * @return void
     */
    public function selectChangeStudent(SelectChangeUpdateRequest $request)
    {
        $data = $request->validated();
        $this->student->updateSelect(['is_graduate' => 0], $data['select']);
        return ResponseHelper::success(null, trans('alert.update_success'));
    }
}
