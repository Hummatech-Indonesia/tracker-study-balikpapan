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
use App\Contracts\Interfaces\MajorInterface;
use App\Helpers\ResponseHelper;
use App\Http\Requests\ImportRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\ChartAlumniResource;
use App\Imports\StudentImport;
use App\Models\ApplyJobVacancy;
use App\Services\StudentService;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    private StudentInterface $student;
    private StudentService $service;
    private RegisterInterface $register;
    private ClassroomInterface $classroom;
    private MajorInterface $major;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(StudentInterface $student, StudentService $service, RegisterInterface $register, ClassroomInterface $classroom, MajorInterface $major)
    {
        $this->major = $major;
        $this->student = $student;
        $this->service = $service;
        $this->register = $register;
        $this->classroom = $classroom;
    }

    /**
     * verificationStudent
     *
     * @param  mixed $student
     * @return void
     */
    public function verificationStudent(Student $student)
    {
        $this->student->updateBasic($student->id, ['status' => StatusEnum::ACTIVE->value]);
        return redirect()->back()->with('success', 'Berhasil Menyetujui ' . $student->user->name);
    }

    /**
     * rejectVerificationStudent
     *
     * @param  mixed $student
     * @return void
     */
    public function rejectVerificationStudent(Student $student)
    {
        $this->student->updateBasic($student->id, ['status' => StatusEnum::REJECT->value]);
        return redirect()->back()->with('success', 'Berhasil Menolak ' . $student->user->name);
    }

    /**
     * viewVerificationStudent
     *
     * @param  mixed $student
     * @return void
     */
    public function viewVerificationStudent(Request $request)
    {
        $request->merge(['is_graduate' => 0]);
        $students = $this->student->studentNonactive($request, 10);
        return view('admin.account-siswa', [
            'students' => $students
        ]);
    }
    /**
     * viewVerificationAlumni
     *
     * @param  mixed $request
     * @return void
     */
    public function viewVerificationAlumni(Request $request)
    {
        $request->merge(['is_graduate' => 1]);
        $students = $this->student->studentNonactive($request, 10);
        return view('admin.account-alumni', [
            'students' => $students
        ]);
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
    public function update(StudentUpdateRequest $request, User $user)
    {
        $this->register->update($user->id, $this->service->update($request, $user));
        $this->student->updateBasic($user->student->id, $request->validated());
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

    /**
     * import
     *
     * @param  mixed $request
     * @return void
     */
    public function import(ImportRequest $request)
    {
        $data = $request->validated();
        Excel::import(new StudentImport, $data['import']);
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * chartAlumni
     *
     * @return void
     */
    public function chartAlumni()
    {
        $majors = $this->major->get();
        $chart = ChartAlumniResource::collection($majors);
        return ResponseHelper::success($chart);
    }

    public function detailApplicant(ApplyJobVacancy $apply_job_vacancies)
    {
        $applyJobVacancy = $apply_job_vacancies;
        return view('company.detail-applicant', compact('applyJobVacancy'));
    }
}
