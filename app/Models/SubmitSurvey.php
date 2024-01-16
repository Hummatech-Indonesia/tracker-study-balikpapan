<?php

namespace App\Models;

use App\Base\Interfaces\HasRegency;
use App\Base\Interfaces\HasSurvey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmitSurvey extends Model implements HasSurvey, HasRegency
{
    use HasFactory;
    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'submit_surveys';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'survey_id',
        'student_id',
        'regency_id',
        'graduation_year',
        'activity',
        'url_address',
        'email',
        'facebook',
        'alumni_gathering',
        'current_activity',
    ];

    /**
     * survey
     *
     * @return BelongsTo
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }

    /**
     * regency
     *
     * @return BelongsTo
     */
    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class);
    }
}
