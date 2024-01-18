<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;

interface CompanyInterface extends StoreInterface, UpdateInterface, SearchInterface, GetInterface, CustomPaginationInterface
{
    /**
     * getThree
     *
     * @return mixed
     */
    public function getThree(): mixed;
}
