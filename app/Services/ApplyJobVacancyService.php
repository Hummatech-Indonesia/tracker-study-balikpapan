<?php

namespace App\Services;

use App\Models\JobVacancy;
use App\Traits\UploadTrait;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\Request;
use App\Http\Requests\ApplyJobVacancyRequest;
use App\Mail\AcceptJobVacanciesMail;
use App\Mail\RejectJobVacanciesMail;
use Illuminate\Support\Facades\Mail;

class ApplyJobVacancyService
{
    use UploadTrait;

    /**
     * store
     *
     * @param  mixed $request
     * @return array
     */
    public function store(ApplyJobVacancyRequest $request, JobVacancy $jobVacancy): array
    {
        $data = $request->validated();
        $data['job_vacancy_id'] = $jobVacancy->id;
        $data['student_id'] = auth()->user()->student->id;
        $data['cv'] = $this->upload(UploadDiskEnum::CV->value, $request->file('cv'));
        return $data;
    }

    /**
     * sendMailAccept
     *
     * @param  mixed $data
     * @return void
     */
    public function sendMailAccept(array $data): void
    {
        Mail::to($data['email'])->send(new AcceptJobVacanciesMail($data));
    }

    /**
     * sendMailReject
     *
     * @param  mixed $data
     * @return void
     */
    public function sendMailReject(array $data): void
    {
        Mail::to($data['email'])->send(new RejectJobVacanciesMail($data));
    }
}
