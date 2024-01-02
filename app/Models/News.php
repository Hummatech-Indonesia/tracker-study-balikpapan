<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $table = 'news';
    protected $fillable = [
        'id',
        'title',
        'thumbnail',
        'content',
    ];
    protected $guarded = [];
}
