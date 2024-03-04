<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function header_admin(){
        return view('vista_admin.index_admin');
    }
    
    public function registro_paciente_admin(){
        return view('vista_admin.registropaciente_admin');
    }

    public function añadir_paciente_admin(){
        return view('vista_admin.añadirpaciente');
    }

    public function añadir_historial_admin(){
        return view('vista_admin.añadirhistorial');
    }

    public function añadir_receta_admin(){
        return view('vista_admin.añadirreceta');
    }

    public function añadir_datos_paciente_admin(){
        return view('vista_admin.historial_paciente');
    }

    public function publicaciones(){
        return view('vista_admin.publicaciones');
    }

    public function publicaciones_registro(){
        return view('vista_admin.publicaciones_registro');
    }
}


