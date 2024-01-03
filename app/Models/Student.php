<?php

namespace App\Models;

use App\Models\Classroom;
use App\Base\Interfaces\HasUser;
use App\Base\Interfaces\HasClassroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model implements HasUser, HasClassroom
{
    use HasFactory;
    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'students';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'classroom_id',
        'national_student_id',
        'birth_date',
        'gender',
        'status'
    ];

    /**
     * user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * classroom
     *
     * @return BelongsTo
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
}
