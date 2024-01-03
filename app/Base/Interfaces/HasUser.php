<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


interface HasUser
{
    /**
     * major
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo;
}
