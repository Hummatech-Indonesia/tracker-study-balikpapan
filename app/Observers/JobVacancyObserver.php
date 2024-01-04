<?php

namespace App\Observers;

use Faker\Provider\Uuid;
use App\Models\JobVacancy;

class JobVacancyObserver
{
    /**
     * Handle the JobVacancy "created" event.
     */
    public function creating(JobVacancy $jobVacancy): void
    {
        $jobVacancy->id = Uuid::uuid();
    }
}
