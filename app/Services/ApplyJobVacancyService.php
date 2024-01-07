<?php

namespace App\Services;

use App\Models\JobVacancy;
use App\Traits\UploadTrait;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\Request;
use App\Http\Requests\ApplyJobVacancyRequest;

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
}
