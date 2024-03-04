<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class HistorialController extends Controller
{
    public function mostrarHistorial($id) {
        $paciente = Paciente::findOrFail($id);
        return view('vista_admin.historial_paciente', compact('paciente'));
    }
}