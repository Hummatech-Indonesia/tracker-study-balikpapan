<?php

namespace App\Observers;

use App\Models\PhotoPortofolio;
use Faker\Provider\Uuid;

class PhotoPortofolioObserver
{
    /**
     * Handle the PhotoPortofolio "created" event.
     */
    public function creating(PhotoPortofolio $photoPortofolio): void
    {
        $photoPortofolio->id = Uuid::uuid();
    }
}
