<?php

namespace App\Observers;

use App\Models\SliderGalleryAlumni;
use Faker\Provider\Uuid;

class SliderGalleryAlumniObserver
{
    public function creating(SliderGalleryAlumni $sliderGalleryAlumni): void
    {
        $sliderGalleryAlumni->id = Uuid::uuid();
    }
}
