<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Services\ApplyJobVacancyService;
use App\Http\Requests\ApplyJobVacancyRequest;
use App\Contracts\Interfaces\ApplyJobVacancyInterface;
use App\Enums\ApplicantStatusEnum;
use App\Http\Requests\AcceptAndRejectApplyJobVancyRequest;
use App\Models\ApplyJobVacancy;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
     * accept
     *
     * @param  mixed $apply_job_vacancies
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function accept(ApplyJobVacancy $apply_job_vacancies, AcceptAndRejectApplyJobVancyRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['status'] = ApplicantStatusEnum::ACCEPTED->value;
        $this->applyJobVacancy->update($apply_job_vacancies->id, $data);
        $this->service->sendMailAccept(['email' => $apply_job_vacancies->student->user->email, 'message' => $data['message']]);
        return redirect()->back()->with('success', trans('alert.update_success'));
    }

    /**
     * reject
     *
     * @param  mixed $apply_job_vacancies
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function reject(ApplyJobVacancy $apply_job_vacancies, AcceptAndRejectApplyJobVancyRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['status'] = ApplicantStatusEnum::REJECTED->value;
        $this->applyJobVacancy->update($apply_job_vacancies->id, $data);
        $this->service->sendMailReject(['email' => $apply_job_vacancies->student->user->email, 'message' => $data['message']]);
        return redirect()->back()->with('success', trans('alert.update_success'));
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
