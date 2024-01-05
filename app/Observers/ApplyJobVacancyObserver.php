<?php

namespace App\Observers;

use Faker\Provider\Uuid;
use App\Models\ApplyJobVacancy;

class ApplyJobVacancyObserver
{
    /**
     * Handle the applyJobVacancy "created" event.
     */
    public function creating(ApplyJobVacancy $applyJobVacancy): void
    {
        $applyJobVacancy->id = Uuid::uuid();
    }
}
