<?php

namespace App\Base\Interfaces;

use App\Base\Interfaces\HasAlumni;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface HasAlumni
{
    /**
     * One-to-Many relationship with Category Model
     *
     * @return BelongsTo
     */

    public function alumni(): BelongsTo;
}
