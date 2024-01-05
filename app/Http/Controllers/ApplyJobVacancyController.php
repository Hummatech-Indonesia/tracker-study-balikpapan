<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Services\ApplyJobVacancyService;
use App\Http\Requests\ApplyJobVacancyRequest;

class ApplyJobVacancyController extends Controller
{
    private ApplyJobVacancyInterface $applyJobVacancy;

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
}
