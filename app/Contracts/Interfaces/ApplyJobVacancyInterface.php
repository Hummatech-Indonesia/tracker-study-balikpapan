<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;

interface ApplyJobVacancyInterface extends StoreInterface
{
    /**
     * getJob
     *
     * @return mixed
     */
    public function getJob(): mixed;
}
