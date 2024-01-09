<?php

namespace App\Contracts\Repositories;

use App\Models\ApplyJobVacancy;
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
            ->create($data);
    }

    public function getJob(): mixed
    {
        return $this->model->query()
            ->where('student_id', auth()->user()->student->id)
            ->get();
    }
}
