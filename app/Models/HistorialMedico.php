<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;

    protected $table = 'historial_medico';
    protected $fillable = [
        'Trabajo',
        'Condiciones_de_Vivienda',
        'Alimentacion',
        'Frecuencia_de_Ejercicio',
        'Habitos_Nocivos',
        'Alergias_Reacciones_Adversas_Farmacologicas',
        'Antecedentes_Medicos',
        'Intervenciones_Quirurgicas_Accidentes',
        'Antecedentes_Gineco_Obstetricos',
        'Motivo_de_Consulta',
        'Historia_de_la_Enfermedad_Actual',
        'Funciones_Biologicas',
        'Examen_Clinico_General',
        'Examen_Clinico_Regional',
        'Diagnostico',
        'Plan_Terapeutico',
        'fecha',
        
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}