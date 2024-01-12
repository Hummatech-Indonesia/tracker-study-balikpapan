<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitSurvey extends Model
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
        'phone_number',
        'email',
        'facebook',
        'alumni_gathering',
        'current_activity',
    ];
    public function regency()
    {
        return $this->belongsTo(Regency::class ,'regency_id');
    }
}
