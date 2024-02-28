<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function guardar(Request $request)
{
    $paciente = new Paciente();
    $paciente->CI = $request->CI;
    $paciente->Nombres = $request->nombre;
    $paciente->Apellidos = $request->apellido_paterno . ' ' . $request->apellido_materno;
    $paciente->Sexo = $request->sexo;
    $paciente->Edad = $request->edad;
    $paciente->Estado_Civil = $request->estado_civil;
    $paciente->Grado_de_Instruccion = $request->grado_instruccion;
    $paciente->Ocupacion_Actual = $request->ocupacion;
    $paciente->Procedencia = $request->Procedencia;
    $paciente->Residencia = $request->Residencia;
    $paciente->Fuente_de_Informacion = $request->Fuente_de_Informacion;
    $paciente->email = $request->email;
    $paciente->Celular = $request->celular;
    $paciente->Tipo_de_Sangre = $request->TipoSangre;
    $paciente->Peso = $request->Peso;
    $paciente->Talla = $request->Talla;
    $paciente->Detalle = $request->detalle;

    $paciente->save();

    return redirect()->back()->with('success', 'Paciente registrado correctamente');
}

}

