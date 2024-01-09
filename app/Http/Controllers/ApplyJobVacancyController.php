<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Services\ApplyJobVacancyService;
use App\Http\Requests\ApplyJobVacancyRequest;
use App\Contracts\Interfaces\ApplyJobVacancyInterface;
use Illuminate\Contracts\View\View;

class ApplyJobVacancyController extends Controller
{
    private ApplyJobVacancyInterface $applyJobVacancy;
    private ApplyJobVacancyService $service;

    public function __construct(ApplyJobVacancyInterface $applyJobVacancy, ApplyJobVacancyService $service)
    {
        $this->applyJobVacancy = $applyJobVacancy;
        $this->service = $service;
    }



    /**
     * store
     *
     * @param  mixed $request
     * @param  mixed $jobVacancy
     * @return void
     */
    public function store(ApplyJobVacancyRequest $request, JobVacancy $jobVacancy)
    {
        $this->applyJobVacancy->store($this->service->store($request, $jobVacancy));
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * index
     *
     * @return View
     */
    public function index() : View
    {
        $applyJobVacancies = $this->applyJobVacancy->getJob();
        return view('alumni.job-vacancy-page',compact('applyJobVacancies'));
    }

    public function companyApplyJobVacancy() : View
    {
        $applyJobVacancies = $this->applyJobVacancy->getByCompany(auth()->user()->company->id);
        return view('company.job-applicant');
    }

}
