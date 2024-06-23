<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = ['*'];

    // Definir la clave primaria de la tabla pivote
    protected $primaryKey = ['estudiantes_id', 'materia_id'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiantes::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}