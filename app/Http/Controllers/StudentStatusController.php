<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Traits\PaginationTrait;
use Illuminate\Contracts\View\View;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Http\Requests\SelectChangeUpdateRequest;
use App\Http\Resources\StudentAndAlumniResource;

class StudentStatusController extends Controller
{
    use PaginationTrait;
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
     */
    public function show(Classroom $classroom, Request $request)
    {

    }

    public function studentAlumni(Classroom $classroom): View
    {
        return view('admin.student-status', compact('classroom'));
    }

    public function alumni(Request $request)
    {
        $request->merge(['is_graduate' => 1]);
        $students = $this->student->customPaginate($request, 10);
        $data['paginate'] = $this->customPaginate($students->currentPage(), $students->lastPage());
        $data['data'] = StudentAndAlumniResource::collection($students);
        $students->appends(['name' => $request->name]);
        return ResponseHelper::success($data);
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
        $data['is_graduate'] = 1;
        $data['role'] = RoleEnum::ALUMNI->value;
        $select = $request->validated();
        $this->student->updateSelect($data, $select['select']);
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
        $data['is_graduate'] = 0;
        $data['role'] = RoleEnum::STUDENT->value;
        $select = $request->validated();
        $this->student->updateSelect($data, $select['select']);
        return ResponseHelper::success(null, trans('alert.update_success'));
    }
}
