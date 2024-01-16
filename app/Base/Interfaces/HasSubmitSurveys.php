<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasSubmitSurveys
{
    /**
     * submitSurveys
     *
     * @return HasMany
     */
    public function submitSurveys(): HasMany;
}
