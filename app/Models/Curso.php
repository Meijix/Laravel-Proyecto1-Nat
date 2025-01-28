<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //private $table = 'cursos';
    protected $fillable = ['nombre', 'objetivo', 'modalidad', 'cupo', 'periodo', 'horario', 'dias', 'salon'];
    
}
