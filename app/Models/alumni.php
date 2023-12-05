<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';
    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'student_id_number',
        'study_program',
        'graduate_date',
    ];
    protected $guarded = [];
}
