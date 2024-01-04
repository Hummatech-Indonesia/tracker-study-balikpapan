<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Helpers\ResponseHelper;
use App\Services\StudentService;

class StudentController extends Controller
{
    private StudentInterface $student;
    private StudentService $service;
    private RegisterInterface $register;
    private ClassroomInterface $classroom;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(StudentInterface $student, StudentService $service, RegisterInterface $register, ClassroomInterface $classroom)
    {
        $this->student = $student;
        $this->service = $service;
        $this->register = $register;
        $this->classroom = $classroom;
    }

    public function verificationStudent(Student $student)
    {
        $this->student->update($student->id, ['status' => StatusEnum::NONACTIVE->value]);
        return redirect()->back(null, trans('alert.update_success'));
    }

    /**
     * index
     *
     * @return view
     */
    public function index(Request $request): view
    {
        $classrooms = $this->classroom->get();
        $students = $this->student->customPaginate($request, 10);
        $students->appends(['name' => $request->name]);
        return view('admin.student', ['classrooms' => $classrooms, 'students' => $students]);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(StudentRequest $request)
    {
        $this->service->store($request, $this->register);
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * Update the specified resource in storage.
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function update(UpdateStudentRequest $request, User $user)
    {
        $this->register->update($user->id, $this->service->update($request));
        $this->student->update($user->student->id, $request->validated());
        if ($request->is('api/*')) {
            return ResponseHelper::success(null, trans('alert.update_success'));
        } else {
            return redirect()->back()->with('success', trans('alert.update_success'));
        }
    }

    /**
     * destroy
     *
     * @param  mixed $user
     * @return void
     */
    public function destroy(User $user)
    {
        $this->register->delete($user->id);
        return redirect()->back()->with('success', trans('alert.delete_success'));
    }


}
