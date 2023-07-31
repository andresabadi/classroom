<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration'
    ]; 

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
