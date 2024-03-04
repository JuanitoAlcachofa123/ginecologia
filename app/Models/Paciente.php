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

    public function antecedentesPersonalesNoPatologicos()
    {
        return $this->hasOne(AntecedentesPersonalesNoPatologico::class);
    }

    public function antecedentesPersonalesPatologicos()
    {
        return $this->hasOne(AntecedentesPersonalesPatologico::class);
    }

    public function antecedentesFamiliares()
    {
        return $this->hasOne(AntecedentesFamiliares::class);
    }

    public function anamnesisYMotivoDeConsulta()
    {
        return $this->hasOne(AnamnesisYMotivoDeConsulta::class);
    }

    public function examenFisico()
    {
        return $this->hasOne(ExamenFisico::class);
    }

    public function diagnostico()
    {
        return $this->hasOne(Diagnostico::class);
    }

    public function planTerapeutico()
    {
        return $this->hasOne(PlanTerapeutico::class);
    }

    public function login()
    {
        return $this->hasOne(Login::class);
    }

    public function recetas()
    {
        return $this->hasMany(Receta::class);
    }
}
