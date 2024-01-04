<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadAlumni extends Model
{
    use HasFactory;
    protected $table = 'upload_alumnis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul','file','categories'
    ];
}
