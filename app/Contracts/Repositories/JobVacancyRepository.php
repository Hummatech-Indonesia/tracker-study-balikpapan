<?php

namespace App\Contracts\Repositories;

use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Contracts\Interfaces\JobVacancyInterface;

class JobVacancyRepository extends BaseRepository implements JobVacancyInterface
{

    public function __construct(JobVacancy $model)
    {
        $this->model = $model;
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
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
            ->create($data);
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
        return $this->model->query()
            ->findOrFail($id)->update($data);
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
     * delete
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->show($id)->delete($id);
    }

    /**
     * customPaginate
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function customPaginate(Request $request, int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()
            ->when($request->job_title, function ($query) use ($request) {
                $query->where('job_title', 'LIKE', '%' . $request->job_title . '%');
            })
            ->when($request->company_id, function ($query) use ($request) {
                $query->where('company_id', $request->company_id);
            })
            ->latest()
            ->fastPaginate($pagination);
    }
}
