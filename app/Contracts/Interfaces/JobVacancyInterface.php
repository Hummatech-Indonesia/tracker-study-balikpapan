<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface JobVacancyInterface extends GetInterface, StoreInterface, UpdateInterface, DeleteInterface, ShowInterface, CustomPaginationInterface
{
    /**
     * getLatestJobVacancy
     *
     * @return mixed
     */
    public function getLatestJobVacancy(): mixed;

    /**
     * getPortofolioByStudent
     *
     * @return mixed
     */
    public function countVacancy(): mixed;
}
