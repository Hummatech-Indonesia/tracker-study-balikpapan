<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasClassrooms
{
    /**
     * classrooms
     *
     * @return HasMany
     */
    public function classrooms(): HasMany;
}
