<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RecetaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::controller(indexController::class)->group(function(){

    Route::get('index',  'index');

    Route::get('informacion', 'informacion');

    Route::get('contactanos', 'contactanos');

    Route::get('sobre_nosotros', 'sobre_nosotros');


});

Route::controller(AdminController::class)->group(function(){

    Route::get('admin/index',  'header_admin');

    //Route::get('admin/registro',  'registro_paciente_admin');

    Route::get('admin/registro/paciente',  'añadir_paciente_admin');

    Route::get('admin/registro/receta',  'añadir_receta_admin');

    Route::get('admin/registro/historial',  'añadir_historial_admin');

    Route::get('admin/registro/datos_paciente',  'añadir_datos_paciente_admin');

    Route::get('admin/publicaciones',  'publicaciones');

    Route::get('admin/publicaciones/registro',  'publicaciones_registro');


});

Route::post('/guardar_paciente', [PacienteController::class, 'guardar'])->name('guardar_paciente');

Route::post('/guardar_receta', [RecetaController::class, 'guardar'])->name('guardar_receta');

Route::get('admin/registro', [PacienteController::class, 'mostrarPacientes']);

Route::put('admin/paciente/{id}', [PacienteController::class, 'update'])->name('paciente.update');

Route::get('/admin/registro/buscar_paciente', [PacienteController::class, 'buscar'])->name('paciente.buscar');



//Nuevo

Route::get('/historial/{id}', 'HistorialController@mostrarHistorial')->name('historial.mostrar');

//Hitorial de paciente segun su ID

Route::get('/admin/registro/datos_paciente/{id}', [PacienteController::class, 'mostrarDatosPaciente'])->name('paciente.mostrar_datos');


//Receta
Route::get('/admin/registro/receta/{pacienteId}', [PacienteController::class, 'mostrarFormularioReceta'])->name('paciente.mostrar_receta');
