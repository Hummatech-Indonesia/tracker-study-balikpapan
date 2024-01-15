<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasJobVacancies
{
    /**
     * jobVacancies
     *
     * @return HasMany
     */
    public function jobVacancies(): HasMany;
}
