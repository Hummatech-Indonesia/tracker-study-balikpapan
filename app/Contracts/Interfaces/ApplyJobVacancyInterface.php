<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;

interface ApplyJobVacancyInterface extends StoreInterface,ShowInterface
{
    /**
     * getJob
     *
     * @return mixed
     */
    public function getJob(): mixed;

    /**
     * getApplicant
     * @param $id 
     * @return mixed
     */
    public function getApplicant(mixed $id): mixed;

    /**
     * countAccepted
     * @param $id
     * @return mixed
     */
    public function countAccepted(mixed $id): mixed;

    /**
     * countPending
     * @param $id
     * @return mixed
     */
    public function countPending(mixed $id): mixed;
    /**
     * countRejected
     * @param $id
     * @return mixed
     */
    public function countRejected(mixed $id): mixed;
}
