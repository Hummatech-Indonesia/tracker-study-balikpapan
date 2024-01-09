<?php

namespace App\Contracts\Repositories;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\StatusEnum;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentRepository extends BaseRepository implements StudentInterface
{
    public function __construct(Student $student)
    {
        $this->model = $student;
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
     * customPaginate
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function customPaginate(Request $request, int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()
            ->where('is_graduate', 0)
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->fastPaginate($pagination);
    }

    /**
     * studentNonactive
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function studentNonactive(Request $request, int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::NONACTIVE->value, 'is_graduate' => 1])
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->fastPaginate($pagination);
    }

    /**
     * studentClassroom
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function studentClassroom(Request $request, int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()
            ->where(['classroom_id' => $request->classroom_id, 'status' => StatusEnum::ACTIVE->value])
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->fastPaginate($pagination);
    }

    /**
     * countStudent
     *
     * @param  mixed $data
     * @return int
     */
    public function countStudent(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 0])
            ->count();
    }

    /**
     * countAlumni
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumni(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->count();
    }

    /**
     * updateSelect
     *
     * @param  mixed $data
     * @param  mixed $select
     * @return mixed
     */
    public function updateSelect(array $data, array $select): mixed
    {
        return $this->model->query()
            ->whereIn('id', $select)
            ->update($data);
    }
}
