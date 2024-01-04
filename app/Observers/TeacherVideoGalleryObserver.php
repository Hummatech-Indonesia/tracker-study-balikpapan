<?php

namespace App\Observers;

use App\Models\TeacherVideoGallery;
use Faker\Provider\Uuid;

class TeacherVideoGalleryObserver
{
    /**
     * Handle the TeacherVideoGallery "creating" event.
     */
    public function creating(TeacherVideoGallery $teacherVideoGallery): void
    {
        $teacherVideoGallery->id = Uuid::uuid();
    }
    /**
     * Handle the TeacherVideoGallery "created" event.
     */
    public function created(TeacherVideoGallery $teacherVideoGallery): void
    {
        //
    }

    /**
     * Handle the TeacherVideoGallery "updated" event.
     */
    public function updated(TeacherVideoGallery $teacherVideoGallery): void
    {
        //
    }

    /**
     * Handle the TeacherVideoGallery "deleted" event.
     */
    public function deleted(TeacherVideoGallery $teacherVideoGallery): void
    {
        //
    }

    /**
     * Handle the TeacherVideoGallery "restored" event.
     */
    public function restored(TeacherVideoGallery $teacherVideoGallery): void
    {
        //
    }

    /**
     * Handle the TeacherVideoGallery "force deleted" event.
     */
    public function forceDeleted(TeacherVideoGallery $teacherVideoGallery): void
    {
        //
    }
}
