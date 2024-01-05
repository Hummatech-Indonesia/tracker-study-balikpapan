<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Services\JobVacancyService;
use App\Http\Requests\JobVacancyRequest;
use App\Contracts\Interfaces\JobVacancyInterface;

class JobVacancyController extends Controller
{
    private JobVacancyInterface $jobVacancy;
    private JobVacancyService $jobVacancyService;

    public function __construct(JobVacancyInterface $jobVacancy, JobVacancyService $jobVacancyService)
    {
        $this->jobVacancy = $jobVacancy;
        $this->jobVacancyService = $jobVacancyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobVacancys = $this->jobVacancy->get();
        return view('company.vacancy', ['jobVacancys' => $jobVacancys]);
    }

    public function jobvacancy ()
    {
        $jobVacancys = $this->jobVacancy->get();
        return view('alumni.vacancies-available' , ['jobVacancys' => $jobVacancys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobVacancyRequest $request)
    {
        $this->jobVacancy->store($this->jobVacancyService->store($request));
        return redirect()->back()->with('success', trans('alert.add_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(JobVacancy $job_vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobVacancy $job_vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobVacancyRequest $request, JobVacancy $job_vacancy)
    {
        $this->jobVacancy->update($job_vacancy->id, $request->validated());
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobVacancy $job_vacancy)
    {
        //
    }
}
