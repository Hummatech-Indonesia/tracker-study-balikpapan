<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasOne;

interface HasStudent
{
    /**
     * student
     *
     * @return HasOne
     */
    public function student(): HasOne;
}
