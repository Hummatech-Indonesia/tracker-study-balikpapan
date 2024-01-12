<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasSurvey
{
    /**
     * survey
     *
     * @return BelongsTo
     */
    public function survey(): BelongsTo;
}
