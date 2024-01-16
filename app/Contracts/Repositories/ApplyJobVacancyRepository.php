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
     * getByCompany
     *
     * @param  mixed $id
     * @return mixed
     */
    public function getByCompany(mixed $id): mixed
    {
        return $this->model->query()
            ->whereRelation('jobVacancy', 'company_id', $id)
            ->get();
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
            ], $data);
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

    /**
     * update
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->show($id)
            ->update($data);
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

    public function countApplyJobVacancy(mixed $id): mixed
    {
        return $this->model->query()
        ->where('student_id',$id)
        ->count();
    }
}
