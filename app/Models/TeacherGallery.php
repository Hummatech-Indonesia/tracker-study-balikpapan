<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherGallery extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $table = 'teacher_galleries';
    protected $fillable = [
        'id',
        'photo',
        'name',
    ];
    protected $guarded = [];
}
