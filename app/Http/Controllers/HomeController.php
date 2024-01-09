<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Contracts\Interfaces\JobVacancyInterface;
use App\Contracts\Interfaces\PortofolioInterface;

class HomeController extends Controller
{

    private PortofolioInterface $portofolio;
    private JobVacancyInterface $jobVacancy;

    public function __construct(PortofolioInterface $portofolio, JobVacancyInterface $jobVacancy)
    {
        $this->portofolio = $portofolio;
        $this->jobVacancy = $jobVacancy;
    }

    /**
     *
     */
    public function index()
    {
        $jobVacancys = $this->jobVacancy->get();
        return view('index', compact('jobVacancys'));
    }

    /**
     * dashboard
     *
     * @return void
     */
    public function dashboard()
    {

        $role = auth()->user()->roles[0]->name;

        switch ($role) {
            case RoleEnum::ADMIN->value:
                return view('admin.index');
                break;
            case RoleEnum::STUDENT->value:
                $countPortofolio = $this->portofolio->countPortofolio();
                return view('student.dashboard', compact('countPortofolio'));
                break;
            case RoleEnum::ALUMNI->value:
                return view('alumni.index');
                break;
            case RoleEnum::COMPANY->value:
                return view('company.index');
                break;
        }
    }
}
