<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\CustomPaginationInterface;

interface StudentInterface extends CustomPaginationInterface,StoreInterface, UpdateInterface
{
}
