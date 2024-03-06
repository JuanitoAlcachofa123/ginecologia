<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $primaryKey = 'ID_Paciente';
    protected $fillable = [
        'CI',
        'Nombres',
        'Apellidos',
        'Sexo',
        'Edad',
        'Estado_Civil',
        'Grado_de_Instruccion',
        'Ocupacion_Actual',
        'Procedencia',
        'Residencia',
        'Fuente_de_Informacion',
        'email',
        'Celular',
        'Tipo_de_Sangre',
        'Peso',
        'Talla',
        'Detalle',
    ];

}
