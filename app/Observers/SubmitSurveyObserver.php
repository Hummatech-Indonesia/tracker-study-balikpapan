<?php

namespace App\Observers;

use Faker\Provider\Uuid;
use App\Models\SubmitSurvey;

class SubmitSurveyObserver
{
    /**
     * Handle the Student "created" event.
     */
    public function creating(SubmitSurvey $survey): void
    {
        $survey->id = Uuid::uuid();
    }
}
