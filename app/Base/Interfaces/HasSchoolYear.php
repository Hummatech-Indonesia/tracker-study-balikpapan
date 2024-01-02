<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasSchoolYear
{
    /**
     * major
     *
     * @return BelongsTo
     */
    public function schoolYear(): BelongsTo;
}
