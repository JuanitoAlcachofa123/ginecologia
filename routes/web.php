<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PacienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

    Route::get('admin/registro',  'registro_paciente_admin');

    Route::get('admin/registro/paciente',  'añadir_paciente_admin');

    Route::get('admin/registro/receta',  'añadir_receta_admin');

    Route::get('admin/registro/historial',  'añadir_historial_admin');

    Route::get('admin/registro/datos_paciente',  'añadir_datos_paciente_admin');


});

Route::get('/crear-paciente', 'PacienteController@crearPacienteForm');

// Ruta para procesar el formulario
Route::post('/crear-paciente', 'PacienteController@crearPaciente');
