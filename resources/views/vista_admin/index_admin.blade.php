<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@extends('vista_admin.app_admin')

@section('content')
<section id="main-section">
    
    <div class="presentacion"> 
        <div class="grid_cont_present">
            <div class="present_text">
                <h1 class="present_titulo">¿Qué puedo hacer como administrador?</h1>
                <p class="present_descrip">¡Como administrador, tienes acceso a una variedad de funciones importantes para la gestión del sistema! Puedes realizar las siguientes acciones:</p>
                <ul>
                    <li>Realizar publicaciones en la página web.</li>
                    <li>Registrar nuevos pacientes en la base de datos.</li>
                    <li>Añadir historiales médicos para cada paciente.</li>
                    <li>Crear y gestionar recetas médicas para los pacientes.</li>
                    <!-- Agrega más acciones según las funcionalidades de tu sistema -->
                </ul>
            </div>
            <div class="img_presentacion">
                <img src="{{ asset('img/ejemplo doctor.jpg') }}" alt="perfil_present">
            </div>
        </div>
    </div>
    

    
</section>
@endsection

