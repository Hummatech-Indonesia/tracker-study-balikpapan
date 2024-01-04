<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAlumni extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $table = 'gallery_alumnis';
    protected $fillable = [
        'id',
        'photo',
        'title',
    ];
    protected $guarded = [];
}
