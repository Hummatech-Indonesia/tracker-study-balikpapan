<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface NewsInterface extends GetInterface, StoreInterface, ShowInterface, UpdateInterface, DeleteInterface
{
    /**
     * getByMonthNow
     *
     * @return mixed
     */
    public function getByMonthNow(): mixed;

    /**
     * getByLatest
     *
     * @return mixed
     */
    public function getByLatest() : mixed;

    /**
     * getOneLatest
     *
     * @return mixed
     */
    public function getOneLatest() : mixed;
}
