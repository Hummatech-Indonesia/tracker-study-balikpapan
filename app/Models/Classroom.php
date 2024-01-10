<?php

namespace App\Models;

use App\Models\Major;
use App\Models\SchoolYear;
use App\Base\Interfaces\HasMajor;
use App\Base\Interfaces\HasSchoolYear;
use App\Base\Interfaces\HasStudents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model implements HasMajor, HasSchoolYear, HasStudents
{
    use HasFactory;
    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'classrooms';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'school_year_id',
        'major_id',
        'name'
    ];

    /**
     * major
     *
     * @return BelongsTo
     */
    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    /**
     * schoolYear
     *
     * @return BelongsTo
     */
    public function schoolYear(): BelongsTo
    {
        return $this->belongsTo(SchoolYear::class);
    }

    /**
     * students
     *
     * @return HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
