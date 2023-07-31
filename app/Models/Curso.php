<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'cursera_url',
        // 'presentaciones_url',
        // 'grabaciones_url',

    ]; 

    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
    public function modulos()
    {
        return $this->hasMany(Modulo::class);
    }
    // public function teacher()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function students()
    // {
    //     return $this->belongsToMany(User::class);
    // }
    // public function studentCount()
    // {
    //     return $this->students()->count();
    // }
}