<?php

namespace App\Observers;

use App\Models\Alumni;
use Faker\Provider\Uuid;

class AlumniObserver
{
    /**
     * Handle the User "creating" event.
     */
    public function creating(Alumni $alumni): void
    {
        $alumni->id = Uuid::uuid();
    }

}
