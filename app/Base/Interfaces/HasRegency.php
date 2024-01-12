<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasRegency
{
 
    /**
     * regency
     *
     * @return BelongsTo
     */
    public function regency(): BelongsTo;
}
