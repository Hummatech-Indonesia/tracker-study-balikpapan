<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasStudents
{
    /**
     * portoFolios
     *
     * @return HasMany
     */
    public function students(): HasMany;
}
