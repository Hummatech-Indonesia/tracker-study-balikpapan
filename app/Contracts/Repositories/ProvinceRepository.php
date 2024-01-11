<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ProvinceInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Province;

class ProvinceRepository extends BaseRepository implements ProvinceInterface
{
    public function __construct(Province $province)
    {
        $this->model = $province;
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */

    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }
}
