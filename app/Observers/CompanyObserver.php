<?php

namespace App\Observers;

use App\Models\Company;
use Faker\Provider\Uuid;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     */
    public function creating(Company $company): void
    {
        $company->id = Uuid::uuid();
    }
}
