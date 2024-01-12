<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CompanyInterface;
use App\Enums\StatusEnum;
use App\Models\Company;
use Illuminate\Http\Request;

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
}
