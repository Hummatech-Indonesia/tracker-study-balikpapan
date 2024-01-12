<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface CompanyInterface extends StoreInterface, UpdateInterface, SearchInterface
{
    /**
     * getThree
     *
     * @return mixed
     */
    public function getThree(): mixed;
}
