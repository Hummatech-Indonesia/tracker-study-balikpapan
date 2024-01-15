<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\SearchInterface;

interface RegencyInterface extends SearchInterface
{
    /**
     * percentageOfAlumni
     *
     * @return mixed
     */
    public function percentageOfAlumni(): mixed;
}
