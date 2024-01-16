<?php

namespace App\Models;

use App\Base\Interfaces\HasSubmitSurveys;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model implements HasSubmitSurveys
{
    use HasFactory;

    /**
     * submitSurveys
     *
     * @return HasMany
     */
    public function submitSurveys(): HasMany
    {
        return $this->hasMany(SubmitSurvey::class);
    }
}
