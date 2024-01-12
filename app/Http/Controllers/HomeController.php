<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Contracts\Interfaces\StudentInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private PortofolioInterface $portofolio;
    private JobVacancyInterface $jobVacancy;
    private StudentInterface $student;

    public function __construct(PortofolioInterface $portofolio, JobVacancyInterface $jobVacancy, StudentInterface $student)
    {
        $this->portofolio = $portofolio;
        $this->student = $student;
        $this->jobVacancy = $jobVacancy;
    }

    /**
     *
     */
    public function index()
    {
        $jobVacancys = $this->jobVacancy->get();
        $countAlumni = $this->student->countAlumni(null);
        $countAlumniStudy = $this->student->countAlumniStudy(null);
        $countAlumniNotWork = $this->student->countAlumniNotWork(null);
        $countAlumniWork = $this->student->countAlumniWork(null);
        $countAlumniBusinnes = $this->student->countAlumniBusinnes(null);
        $countAlumniSubmitSurvey = $this->student->countAlumniSubmitSurvey(null);
        return view('index', compact('jobVacancys', 'countAlumni', 'countAlumniStudy', 'countAlumniNotWork', 'countAlumniWork', 'countAlumniBusinnes', 'countAlumniSubmitSurvey'));
    }

    /**
     * dashboard
     *
     * @return void
     */
    public function dashboard(Request $request)
    {

        $role = auth()->user()->roles[0]->name;

        switch ($role) {
            case RoleEnum::ADMIN->value:
                $countAlumni = $this->student->countAlumni(null);
                $countAlumniSubmitSurvey = $this->student->countAlumniSubmitSurvey(null);
                $countAlumniNotSubmitSurvey = $this->student->countAlumniNotSubmitSurvey(null);
                return view('admin.index', compact('countAlumni', 'countAlumniSubmitSurvey', 'countAlumniNotSubmitSurvey'));
                break;
            case RoleEnum::STUDENT->value:
                $countPortofolio = $this->portofolio->countPortofolio();
                return view('student.dashboard', compact('countPortofolio'));
                break;
            case RoleEnum::ALUMNI->value:
                return view('alumni.index');
                break;
            case RoleEnum::COMPANY->value:
                $jobVacancys = $this->jobVacancy->customPaginate($request, 6);
                return view('company.index', compact('jobVacancys'));
                break;
        }
    }
}
