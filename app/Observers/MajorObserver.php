<?php

namespace App\Observers;

use App\Models\Major;
use Faker\Provider\Uuid;

class MajorObserver
{
    /**
     * Handle the Major "created" event.
     */
    public function creating(Major $major): void
    {
        $major->id = Uuid::uuid();
    }
}
