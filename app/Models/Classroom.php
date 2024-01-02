<?php

namespace App\Models;

use App\Models\Major;
use App\Models\SchoolYear;
use App\Base\Interfaces\HasMajor;
use App\Base\Interfaces\HasSchoolYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model implements HasMajor, HasSchoolYear
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
}
