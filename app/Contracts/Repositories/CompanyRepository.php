<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CompanyInterface;
use App\Enums\StatusEnum;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyRepository extends BaseRepository implements CompanyInterface
{
    public function __construct(Company $company)
    {
        $this->model = $company;
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
     * get
     *
     * @return mixed
     */
    public function search(Request $request): mixed
    {
        return $this->model->query()
            ->where('status', StatusEnum::NONACTIVE->value)
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', $request->name);
            })
            ->get();
    }

    /**
     * getThree
     *
     * @return mixed
     */
    public function getThree(): mixed
    {
        return $this->model->query()
            ->where('status', StatusEnum::ACTIVE->value)
            ->take(3)
            ->get();
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
     * customPaginate
     *
     * @param  mixed $request
     * @param  mixed $pagination
     * @return LengthAwarePaginator
     */
    public function customPaginate(Request $request, int $pagination = 10): LengthAwarePaginator
    {
        return $this->model->query()
            ->when($request->name, function ($query) use ($request) {
                $query->whereRelation('user', 'name', 'LIKE', '%' . $request->name . '%');
            })
            ->when($request->status, function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->latest()
            ->fastPaginate($pagination);
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
