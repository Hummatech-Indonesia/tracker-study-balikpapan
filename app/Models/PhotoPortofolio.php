<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoPortofolio extends Model
{
    use HasFactory;
    public $keyType = 'string';
    protected $primaryKey = 'id';
    protected $table = 'photo_portofolios';
    protected $fillable = [
        'id',
        'portofolio_id',
        'photo',
    ];
    protected $guarded = [];
}
