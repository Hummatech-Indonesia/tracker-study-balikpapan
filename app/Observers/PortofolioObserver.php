<?php

namespace App\Observers;

use App\Models\Portofolio;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\Auth;

class PortofolioObserver
{
    /**
     * Handle the Portofolio "created" event.
     */
    public function creating(Portofolio $portofolio): void
    {
        $portofolio->id = Uuid::uuid();
        $portofolio->student_id = Auth::user()->student->id;
    }
}
