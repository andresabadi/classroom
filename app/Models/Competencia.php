<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug', 
        'description',
        'image_url',
        'user_id',
        'zoom_url',
        'zoom_url',
        'presentaciones_url',
        'grabaciones_url',
    ];

    public function id()
    {
        return $this->competencia_id;
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(User::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class);
    }
    public function studentCount()
    {
        return $this->students()->count();
    }
}