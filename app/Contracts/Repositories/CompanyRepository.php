<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\CompanyInterface;
use App\Models\Company;

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
}
