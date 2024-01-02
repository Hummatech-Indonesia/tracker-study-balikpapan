<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasMajor
{
    /**
     * major
     *
     * @return BelongsTo
     */
    public function major(): BelongsTo;
}
