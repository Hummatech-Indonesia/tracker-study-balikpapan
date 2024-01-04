<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherVideoGallery extends Model
{
    use HasFactory;

    protected $table = 'teacher_video_galleries';
    protected $fillable = ['id', 'video', 'is_video'];
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';
}
