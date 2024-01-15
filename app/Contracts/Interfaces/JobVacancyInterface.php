<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\CountInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;

interface JobVacancyInterface extends GetInterface, StoreInterface, UpdateInterface, DeleteInterface, ShowInterface, CustomPaginationInterface
{
}
