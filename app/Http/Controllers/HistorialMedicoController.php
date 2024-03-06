<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialMedico;

use App\Models\Paciente;

class HistorialMedicoController extends Controller
{
    public function guardarHistorial(Request $request)
{
    $historial = new HistorialMedico();
    $historial->Trabajo = $request->Trabajo;
    $historial->Condiciones_de_Vivienda = $request->Condiciones_de_Vivienda;
    $historial->Alimentacion = $request->Alimentacion;
    $historial->Frecuencia_de_Ejercicio = $request->Frecuencia_de_Ejercicio;
    $historial->Habitos_Nocivos = $request->Habitos_Nocivos;
    $historial->Alergias_Reacciones_Adversas_Farmacologicas = $request->Alergias_Reacciones_Adversas_Farmacologicas;
    $historial->Antecedentes_Medicos = $request->Antecedentes_Medicos;
    $historial->Intervenciones_Quirurgicas_Accidentes = $request->Intervenciones_Quirurgicas_Accidentes;
    $historial->Antecedentes_Gineco_Obstetricos = $request->Antecedentes_Gineco_Obstetricos;
    $historial->Motivo_de_Consulta = $request->Motivo_de_Consulta;
    $historial->Historia_de_la_Enfermedad_Actual = $request->Historia_de_la_Enfermedad_Actual;
    $historial->Funciones_Biologicas = $request->Funciones_Biologicas;
    $historial->Examen_Clinico_General = $request->Examen_Clinico_General;
    $historial->Examen_Clinico_Regional = $request->Examen_Clinico_Regional;
    $historial->Diagnostico = $request->Diagnostico;
    $historial->Plan_Terapeutico = $request->Plan_Terapeutico;
    $historial->fecha = $request->fecha;
    $historial->ID_Paciente = $request->IdPaciente;
    // Asigna el ID del médico, deberías obtenerlo de algún lugar
    $historial->id_medico = 1; // Por ejemplo, asumiendo que el ID del médico es 1

    $historial->save();

    return redirect()->back()->with('success', 'Historial médico agregado correctamente');
}

public function mostrarFormularioHistorial($id)
{
    $paciente = Paciente::find($id);
    return view('vista_admin.añadirhistorial', ['paciente' => $paciente, 'id' => $id]);
}
}
