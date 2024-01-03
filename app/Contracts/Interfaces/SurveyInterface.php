<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;

interface SurveyInterface extends GetInterface,StoreInterface, UpdateInterface,DeleteInterface
{
}
