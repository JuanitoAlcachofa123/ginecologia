<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

use App\Models\Paciente;

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

    public function mostrarRecetas($id)
{
    $paciente = Paciente::find($id);
    $recetas = $paciente->recetas;
    $historial = $paciente->historial_medico; // Asegúrate de que esta línea obtenga el historial del paciente

    return view('vista_admin.historial_paciente', ['paciente' => $paciente, 'recetas' => $recetas, 'historial' => $historial]);
}

}

