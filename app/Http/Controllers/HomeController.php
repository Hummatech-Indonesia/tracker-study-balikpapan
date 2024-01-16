<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ApplyJobVacancyInterface;
use App\Contracts\Interfaces\CompanyInterface;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\PortofolioInterface;
use App\Contracts\Interfaces\RegencyInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\SubmitSurveyInterface;
use App\Contracts\Interfaces\SurveyInterface;
use App\Enums\RoleEnum;
use App\Helpers\ResponseHelper;
use App\Http\Resources\DashboardCompanyResource;
use App\Http\Resources\PieChartResource;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private PortofolioInterface $portofolio;
    private JobVacancyInterface $jobVacancy;
    private StudentInterface $student;
    private CompanyInterface $company;
    private ApplyJobVacancyInterface $applyJobVacancy;
    private SurveyInterface $survey;
    private SubmitSurveyInterface $submitSurvey;

    public function __construct(PortofolioInterface $portofolio, JobVacancyInterface $jobVacancy, StudentInterface $student, CompanyInterface $company,ApplyJobVacancyInterface $applyJobVacancy, SubmitSurveyInterface $submitSurveyInterface, SurveyInterface $surveyInterface)
    {
        $this->survey = $surveyInterface;
        $this->submitSurvey = $submitSurveyInterface;
        $this->company = $company;
        $this->portofolio = $portofolio;
        $this->student = $student;
        $this->jobVacancy = $jobVacancy;
        $this->applyJobVacancy = $applyJobVacancy;
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
                $countPortofolio = $this->portofolio->countPortofolio();
                $countVacancy = $this->jobVacancy->countVacancy();
                $countApplyJobVacancy = $this->applyJobVacancy->countApplyJobVacancy(auth()->user()->student->id);

                return view('alumni.index', compact('portofolios','jobVacancys','countPortofolio','countVacancy','countApplyJobVacancy'));
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

    /**
     * dashboardAdmin
     *
     * @return JsonResponse
     */
    public function dashboardAdmin(): JsonResponse
    {
        if ($this->survey->getLatest()) {
            $total = $this->submitSurvey->percentageOfAlumni($this->survey->getLatest()->id);
            $result = array();
            $currentRegency = "";
            $totalTemp = 0;
            foreach ($total as $item) {
                if (count($result) > 5) break;
                if ($currentRegency == $item->regency->name) {
                    $totalTemp++;
                }
                else {
                    $currentRegency = $item->regency->name;
                    $totalTemp = 1;
                }
                $result[$currentRegency] = $totalTemp;
            }
        }
        else {
            $result = [];
        }
        return ResponseHelper::success($result);
    }
}
