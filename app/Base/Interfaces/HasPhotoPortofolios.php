<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasPhotoPortofolios
{
    /**
     * portoFolios
     *
     * @return HasMany
     */
    public function photoPortofolios(): HasMany;
}
