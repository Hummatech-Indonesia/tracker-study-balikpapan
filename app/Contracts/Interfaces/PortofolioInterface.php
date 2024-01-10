<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\CountInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface PortofolioInterface extends StoreInterface, SearchInterface, DeleteInterface, UpdateInterface, ShowInterface, GetInterface
{
     /**
     * countPortofolio
     *
     * @return string
     */
    public function countPortofolio(): string;
}
