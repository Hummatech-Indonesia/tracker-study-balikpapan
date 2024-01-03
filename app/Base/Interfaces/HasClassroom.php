<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasClassroom
{
    /**
     * classroom
     *
     * @return BelongsTo
     */
    public function classroom(): BelongsTo;
}
