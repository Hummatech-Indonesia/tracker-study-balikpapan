<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniVideoGallery extends Model
{
    use HasFactory;

    protected $table = 'alumni_video_galleries';
    protected $fillable = ['id', 'video'];
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';
}
