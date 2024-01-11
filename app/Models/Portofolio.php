<?php

namespace App\Models;

use App\Base\Interfaces\HasPhotoPortofolios;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portofolio extends Model implements HasPhotoPortofolios
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $table = 'portofolios';
    protected $fillable = [
        'id',
        'name',
        'student_id',
        'year',
        'description',
        'student_id'
    ];
    protected $guarded = [];


    /**
     * photoPortofolios
     *
     * @return HasMany
     */
    public function photoPortofolios(): HasMany
    {
        return $this->hasMany(PhotoPortofolio::class);
    }
}
