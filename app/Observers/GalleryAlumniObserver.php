<?php

namespace App\Observers;

use App\Models\GalleryAlumni;
use Faker\Provider\Uuid;

class GalleryAlumniObserver
{
    public function creating(GalleryAlumni $galleryAlumni): void
    {
        $galleryAlumni->id = Uuid::uuid();
    }
}
