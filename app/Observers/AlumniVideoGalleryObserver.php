<?php

namespace App\Observers;

use App\Models\AlumniVideoGallery;
use Faker\Provider\Uuid;

class AlumniVideoGalleryObserver
{
    /**
     * Handle the AlumniVideoGallery "creating" event.
     */
    public function creating(AlumniVideoGallery $alumniVideoGallery): void
    {
        $alumniVideoGallery->id = Uuid::uuid();
    }

    /**
     * Handle the AlumniVideoGallery "created" event.
     */
    public function created(AlumniVideoGallery $alumniVideoGallery): void
    {
        //
    }

    /**
     * Handle the AlumniVideoGallery "updated" event.
     */
    public function updated(AlumniVideoGallery $alumniVideoGallery): void
    {
        //
    }

    /**
     * Handle the AlumniVideoGallery "deleted" event.
     */
    public function deleted(AlumniVideoGallery $alumniVideoGallery): void
    {
        //
    }

    /**
     * Handle the AlumniVideoGallery "restored" event.
     */
    public function restored(AlumniVideoGallery $alumniVideoGallery): void
    {
        //
    }

    /**
     * Handle the AlumniVideoGallery "force deleted" event.
     */
    public function forceDeleted(AlumniVideoGallery $alumniVideoGallery): void
    {
        //
    }
}
