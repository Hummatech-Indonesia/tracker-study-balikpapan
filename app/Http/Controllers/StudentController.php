<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\Auth\RegisterInterface;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\MajorInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\StatusEnum;
use App\Helpers\ResponseHelper;
use App\Http\Requests\ImportRequest;
use App\Http\Requests\SelectChangeUpdateRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\ChartAlumniResource;
use App\Http\Resources\StudentResource;
use App\Imports\StudentImport;
use App\Mail\RegistrationMail;
use App\Models\ApplyJobVacancy;
use App\Models\Student;
use App\Models\User;
use App\Services\StudentService;
use App\Traits\PaginationTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    use PaginationTrait;
    private StudentInterface $student;
    private StudentService $service;
    private RegisterInterface $register;
    private ClassroomInterface $classroom;
    private MajorInterface $major;
    private CompanyInterface $company;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(StudentInterface $student, StudentService $service, RegisterInterface $register, ClassroomInterface $classroom, MajorInterface $major, CompanyInterface $company)
    {
        $this->major = $major;
        $this->student = $student;
        $this->service = $service;
        $this->register = $register;
        $this->classroom = $classroom;
        $this->company = $company;
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
        Mail::to($student->user->email)->send(new RegistrationMail(['email' => $student->user->email, 'user' => $student->user->name, 'id' => $student->user->id]));
        return redirect()->back()->with('success', 'Berhasil Menyetujui ' . $student->user->name);
    }

    /**
     * verificationStudentAll
     *
     * @param  mixed $request
     * @return void
     */
    public function verificationStudentAll(SelectChangeUpdateRequest $request)
    {
        $select = $request->validated();
        $data['status'] = StatusEnum::ACTIVE->value;
        $this->student->verificationSelect($data, $select['select']);
        return redirect()->back()->with('success', 'Berhasil Menyetujui Student');
    }
    /**
     * verificationStudentAll
     *
     * @param  mixed $request
     * @return void
     */
    public function rejectStudentAll(SelectChangeUpdateRequest $request)
    {
        $select = $request->validated();
        $data['status'] = StatusEnum::REJECT->value;
        $this->student->verificationSelect($data, $select['select']);
        return redirect()->back()->with('success', 'Berhasil Menolak Student');
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
        $students = $this->student->studentNonactive($request, 10);
        $alumnis = $this->student->alumniNonactive($request, 10);
        $companies = $this->company->search($request, 10);
        return view('admin.account-siswa', [
            'students' => $students,
            'alumnis' => $alumnis,
            'companies' => $companies,
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
            'students' => $students,
        ]);
    }

    public function index(Request $request)
    {
        $request->merge(['is_graduate' => 0]);
        $students = $this->student->customPaginate($request, 10);
        $data['paginate'] = $this->customPaginate($students->currentPage(), $students->lastPage());
        $data['data'] = StudentResource::collection($students);
        $students->appends(['name' => $request->name]);
        return ResponseHelper::success($data);
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
