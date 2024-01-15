<?php

namespace App\Models;

use App\Base\Interfaces\HasJobVacancies;
use App\Base\Interfaces\HasUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model implements HasUser, HasJobVacancies
{
    use HasFactory;
    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'companies';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'company_field',
        'website',
        'description',
        'status'
    ];

    /**
     * user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * jobVacancies
     *
     * @return HasMany
     */
    public function jobVacancies(): HasMany
    {
        return $this->hasMany(JobVacancy::class);
    }
}
