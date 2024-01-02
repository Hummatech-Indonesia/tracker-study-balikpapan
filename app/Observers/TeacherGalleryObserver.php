<?php

namespace App\Observers;

use App\Models\TeacherGallery;
use Faker\Provider\Uuid;

class TeacherGalleryObserver
{
    /**
     * Handle the TeacherGallery "creating" event.
     */
    public function creating(TeacherGallery $teacherGallery): void
    {
        $teacherGallery->id = Uuid::uuid();
    }

    /**
     * Handle the TeacherGallery "created" event.
     */
    public function created(TeacherGallery $teacherGallery): void
    {
        //
    }

    /**
     * Handle the TeacherGallery "updated" event.
     */
    public function updated(TeacherGallery $teacherGallery): void
    {
        //
    }

    /**
     * Handle the TeacherGallery "deleted" event.
     */
    public function deleted(TeacherGallery $teacherGallery): void
    {
        //
    }

    /**
     * Handle the TeacherGallery "restored" event.
     */
    public function restored(TeacherGallery $teacherGallery): void
    {
        //
    }

    /**
     * Handle the TeacherGallery "force deleted" event.
     */
    public function forceDeleted(TeacherGallery $teacherGallery): void
    {
        //
    }
}
