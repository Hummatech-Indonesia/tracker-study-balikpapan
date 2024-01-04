<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderGalleryAlumni extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $table = 'slider_gallery_alumnis';
    protected $fillable = [
        'id',
        'photo',
    ];
    protected $guarded = [];
}
