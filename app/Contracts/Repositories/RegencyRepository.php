<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\RegencyInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Regency;

class RegencyRepository extends BaseRepository implements RegencyInterface
{
    public function __construct(Regency $regency)
    {
        $this->model = $regency;
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
