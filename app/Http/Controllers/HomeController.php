<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\SubmitSurveyInterface;
use App\Enums\RoleEnum;
use App\Helpers\ResponseHelper;
use App\Http\Resources\DashboardCompanyResource;
use App\Http\Resources\PieChartResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private PortofolioInterface $portofolio;
    private JobVacancyInterface $jobVacancy;
    private StudentInterface $student;
    private CompanyInterface $company;

    public function __construct(PortofolioInterface $portofolio, JobVacancyInterface $jobVacancy, StudentInterface $student, CompanyInterface $company)
    {
        $this->company = $company;
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
        $companies = $this->company->getThree();
        return view('index', compact('jobVacancys', 'countAlumni', 'countAlumniStudy', 'countAlumniNotWork', 'countAlumniWork', 'countAlumniBusinnes', 'countAlumniSubmitSurvey', 'companies'));
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
                $countStudent = $this->student->countStudent(null);
                $countAlumniSubmitSurvey = $this->student->countAlumniSubmitSurvey(null);
                $countAlumniNotSubmitSurvey = $this->student->countAlumniNotSubmitSurvey(null);
                $countAlumniStudy = $this->student->countAlumniStudy(null);
                $countAlumniNotWork = $this->student->countAlumniNotWork(null);
                $countAlumniWork = $this->student->countAlumniWork(null);
                $countAlumniBussiness = $this->student->countAlumniBusinnes(null);

                return view('admin.index', compact('countAlumni', 'countAlumniSubmitSurvey', 'countAlumniNotSubmitSurvey', 'countAlumniWork', 'countAlumniNotWork', 'countAlumniBussiness', 'countStudent', 'countAlumniStudy'));
                break;
            case RoleEnum::STUDENT->value:
                $countPortofolio = $this->portofolio->countPortofolio();
                $countStudent = $this->student->countStudent(null);
                $portofolios = $this->portofolio->getLatestPortofolio(auth()->user()->student->id);
                return view('student.dashboard', compact('countPortofolio','countStudent','portofolios'));
                break;
            case RoleEnum::ALUMNI->value:
                $portofolios = $this->portofolio->getLatestPortofolio(auth()->user()->student->id);
                $jobVacancys = $this->jobVacancy->getLatestJobVacancy();
                return view('alumni.index', compact('portofolios','jobVacancys'));
                break;
            case RoleEnum::COMPANY->value:
                $jobVacancys = $this->jobVacancy->customPaginate($request, 6);

                return view('company.index', compact('jobVacancys'));
                break;
        }
    }

    /**
     * pieChart
     *
     * @return void
     */
    public function pieChart()
    {
        $students = $this->student->get();
        $pieCharts = PieChartResource::collection($students);
        return ResponseHelper::success($pieCharts);
    }

    /**
     * dashboardCompany
     *
     * @return void
     */
    public function dashboardCompany()
    {
        $company = auth()->user()->company;
        $dashboard = DashboardCompanyResource::make($company);
        return ResponseHelper::success($dashboard);
    }
}
