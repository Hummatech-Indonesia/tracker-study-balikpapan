<?php

namespace App\Observers;

use App\Enums\StatusEnum;
use App\Models\Student;
use Faker\Provider\Uuid;

class StudentObserver
{
    /**
     * Handle the Student "created" event.
     */
    public function creating(Student $student): void
    {
        $student->id = Uuid::uuid();
    }

    /**
     * Handle the Student "updated" event.
     */
    public function updated(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     */
    public function deleted(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "restored" event.
     */
    public function restored(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     */
    public function forceDeleted(Student $student): void
    {
        //
    }
}
