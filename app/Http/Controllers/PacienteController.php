<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Receta;

class PacienteController extends Controller
{
    public function guardar(Request $request)
{
    $paciente = new Paciente();
    $paciente->ID_Paciente = $request->id;
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
public function mostrarPacientes()
    {
        $pacientes = Paciente::all();

        return view('vista_admin.registropaciente_admin', compact('pacientes'));
    }


    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        // Asigna los valores recibidos del formulario a los atributos del modelo
        $paciente->Nombres = $request->Nombres;
        $paciente->Apellidos = $request->Apellidos;
        $paciente->Sexo = $request->Sexo;
        $paciente->Edad = $request->Edad;
        $paciente->Estado_Civil = $request->EstadoCivil;
        $paciente->Residencia = $request->Residencia;
        $paciente->email = $request->Email;
        $paciente->Celular = $request->Celular;
        $paciente->Tipo_de_Sangre = $request->TipoSangre;
        $paciente->Peso = $request->Peso;
        $paciente->Talla = $request->Talla;

        $paciente->save();

        return redirect()->back()->with('success', 'Paciente actualizado correctamente');
    }

    public function buscar(Request $request)
{
    $search = $request->input('search');
    $pacientes = Paciente::where('Nombres', 'LIKE', "%{$search}%")
                        ->orWhere('Apellidos', 'LIKE', "%{$search}%")
                        ->get();

    return view('vista_admin.registropaciente_admin', compact('pacientes'));
}

public function mostrarDatosPaciente($id)
{
    $paciente = Paciente::find($id);

    if (!$paciente) {
        return redirect()->back()->with('error', 'Paciente no encontrado');
    }

    return view('vista_admin.historial_paciente', compact('paciente'));
}

public function mostrarFormularioReceta($id)
{
    $paciente = Paciente::find($id);
    return view('vista_admin.añadirreceta', ['paciente' => $paciente, 'id' => $id]);
}

public function mostrarRecetas($pacienteId)
{
    $paciente = Paciente::find($pacienteId);
    $recetas = Receta::where('paciente_id', $pacienteId)->orderBy('fecha', 'desc')->get();
    return view('vista_admin.historial_paciente', ['paciente' => $paciente, 'recetas' => $recetas]);
}




}

