<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard_name = 'api';

    protected $fillable = [
        'user_uuid',
        'user_id',
        'name',
        'email',
        'password',
        'teacher',
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

    public function competencia()
    {
        return $this->hasMany(Competencia::class);
    }

    public function isTeacher()
    {
        return $this->teacher;
    }

    public function competencias()
    {
        return $this->isTeacher()
            ? $this->hasMany(Competencia::class)
            : $this->belongsToMany(Competencia::class);
    }
}
