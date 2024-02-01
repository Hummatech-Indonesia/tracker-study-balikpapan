<?php

namespace App\Contracts\Repositories;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\StudentInterface;
use App\Enums\ActivityStatusEnum;
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
        $student = $this->show($id);
        $student->update($data);
        $student->user->syncRoles($data['role']);
        return $student;
    }

    /**
     * updateBasic
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return mixed
     */
    public function updateBasic(mixed $id, array $data): mixed
    {
        $student = $this->show($id);
        $student->update($data);
        return $student;
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
        // dd($request);
        return $this->model->query()
            ->where(['is_graduate' => 0, 'status' => StatusEnum::ACTIVE])
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->when($request->classroom, function ($query) use ($request) {
                $query->where('classroom_id', $request->classroom);
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
            ->where(['status' => StatusEnum::NONACTIVE->value, 'is_graduate' => $request->is_graduate])
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
        $student = $this->model->query()
            ->whereIn('id', $select)
            ->update(['is_graduate' => $data['is_graduate']]);

        $students = $this->model->query()
            ->whereIn('id', $select)
            ->get();

        foreach ($students as $student) {
            $student->user->syncRoles($data['role']);
        }

        return $student;
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
     * chartAlumni
     *
     * @return mixed
     */
    public function chartAlumni(): mixed
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->get();
    }

    /**
     * countAlumniSubmitSurvey
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniSubmitSurvey(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereHas('submitSurvey')
            ->count();
    }

    /**
     * countAlumniNotSubmitSurvey
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniNotSubmitSurvey(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereDoesntHave('submitSurvey')
            ->count();
    }

    /**
     * countAlumniStudy
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniStudy(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::STUDY->value)
            ->count();
    }

    /**
     * countAlumniBusinnes
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniBusinnes(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::BUSSINESS->value)
            ->count();
    }

    /**
     * countAlumniNotWork
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniNotWork(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::NOTWORK->value)
            ->count();
    }

    /**
     * countAlumniWork
     *
     * @param  mixed $data
     * @return int
     */
    public function countAlumniWork(?array $data): int
    {
        return $this->model->query()
            ->where(['status' => StatusEnum::ACTIVE->value, 'is_graduate' => 1])
            ->whereRelation('submitSurvey', 'current_activity', ActivityStatusEnum::WORK->value)
            ->count();
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->where('status', StatusEnum::ACTIVE->value)
            ->get();
    }

    /**
     * verificationSelect
     *
     * @param  mixed $data
     * @param  mixed $select
     * @return mixed
     */
    public function verificationSelect(array $data, array $select): mixed
    {
        return $this->model->query()
            ->whereIn('id', $select)
            ->update($data);
    }
}
