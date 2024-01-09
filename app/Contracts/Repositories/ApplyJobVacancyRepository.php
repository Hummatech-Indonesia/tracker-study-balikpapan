<?php

namespace App\Contracts\Repositories;

use App\Models\ApplyJobVacancy;
use App\Enums\ApplicantStatusEnum;
use App\Contracts\Interfaces\ApplyJobVacancyInterface;

class ApplyJobVacancyRepository extends BaseRepository implements ApplyJobVacancyInterface
{
    public function __construct(ApplyJobVacancy $applyJobVacancy)
    {
        $this->model = $applyJobVacancy;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->updateOrCreate([
                'student_id'=>$data['student_id'],
                'job_vacancy_id'=>$data['job_vacancy_id'],
            ]);
    }
        /**
     * show
     *
     * @param  mixed $id
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id);
    }

    public function countAccepted(mixed $id): mixed
    {
         return $this->model->query()
                ->where('job_vacancy_id',$id)
                ->where('status',ApplicantStatusEnum::ACCEPTED->value)
                ->count();
    }

    public function countPending(mixed $id): mixed
    {
         return $this->model->query()
                ->where('job_vacancy_id',$id)
                ->where('status',ApplicantStatusEnum::PENDING->value)
                ->count();
    }

    public function countRejected(mixed $id): mixed
    {
         return $this->model->query()
                ->where('job_vacancy_id',$id)
                ->where('status',ApplicantStatusEnum::REJECTED->value)
                ->count();
    }

    public function getJob(): mixed
    {
        return $this->model->query()
            ->where('student_id', auth()->user()->student->id)
            ->get();
    }

    public function getApplicant(mixed $id): mixed
    {
        return $this->model->query()
            ->where('job_vacancy_id', $id)
            ->get();
    }
}
