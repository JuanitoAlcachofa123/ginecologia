<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    public function guardar(Request $request)
    {
        $receta = new Receta();
        $receta->fecha = $request->Fecha_Receta;
        $receta->medicamento = $request->Medicamento;
        $receta->instrucciones = $request->Instrucciones;
        $receta->dosis = $request->Dosis;
        $receta->duracion = $request->Duracion;
        $receta->observaciones = $request->detalle;
        $receta->ID_Paciente = $request->IdPaciente;
        // Asigna el ID del médico, deberías obtenerlo de algún lugar
        $receta->id_medico = 1; // Por ejemplo, asumiendo que el ID del médico es 1

        $receta->save();

        return redirect()->back()->with('success', 'Receta agregada correctamente');
    }
}