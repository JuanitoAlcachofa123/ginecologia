<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico'; // Especifica el nombre de la tabla si no sigue la convención de Laravel
    protected $primaryKey = 'id_medico'; // Especifica la clave primaria si no es 'id'
    
    protected $fillable = [
        'ci',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'especialidad',
        'biografia',
        'email',
    ];

    // Si necesitas definir relaciones, las puedes agregar aquí
}