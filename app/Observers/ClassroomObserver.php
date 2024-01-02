<?php

namespace App\Observers;

use App\Models\Classroom;
use Faker\Provider\Uuid;

class ClassroomObserver
{
    /**
     * Handle the Classroom "created" event.
     */
    public function creating(Classroom $classroom): void
    {
        $classroom->id = Uuid::uuid();
    }
}
