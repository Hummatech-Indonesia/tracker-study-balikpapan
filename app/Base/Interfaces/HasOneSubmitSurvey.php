<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasOne;

interface HasOneSubmitSurvey
{
    /**
     * submitSurvey
     *
     * @return HasOne
     */
    public function submitSurvey(): HasOne;
}
