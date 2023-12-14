<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Alumni;
use Laravel\Sanctum\HasApiTokens;
use App\Base\Interfaces\HasAlumni;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasAlumni
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRole;

    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'users';
    protected $primaryKey = 'id';

    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the alumni that owns the Alumni
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumni(): BelongsTo
    {
        return $this->belongsTo(Alumni::class);
    }
}
