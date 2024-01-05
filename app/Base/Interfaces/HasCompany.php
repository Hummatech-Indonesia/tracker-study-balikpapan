<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasOne;

interface HasCompany
{
    /**
     * student
     *
     * @return HasOne
     */
    public function company(): HasOne;
}
