<?php

namespace App\Observers;

use App\Models\Portofolio;
use Faker\Provider\Uuid;

class PortofolioObserver
{
    /**
     * Handle the Portofolio "created" event.
     */
    public function creating(Portofolio $portofolio): void
    {
        $portofolio->id = Uuid::uuid();
    }
}
