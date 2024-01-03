<?php

namespace App\Observers;

use App\Models\Survey;
use Faker\Provider\Uuid;


class SurveyObserver
{
    /**
     * Handle the Student "created" event.
     */
    public function creating(Survey $survey): void
    {
        $survey->id = Uuid::uuid();
    }}
