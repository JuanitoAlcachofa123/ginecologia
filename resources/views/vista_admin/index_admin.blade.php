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
    <div class="panel_de_opciones">
        <div class="grid_cont_botonop">
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/embarazada.png') }}" alt="">
                </div>
                <h3>Control prenatal</h3>
            </div>
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/colposcopio.png') }}" alt="">
                </div>
                <h3>Colposcopia</h3>
            </div>
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/cancer-de-cuello-uterino.png') }}" alt="">
                </div>
                <h3>Papanicolao</h3>
            </div>
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/familia.png') }}" alt="">
                </div>
                <h3>Planificación familiar</h3>
            </div>
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/menstruacion.png') }}" alt="">
                </div>
                <h3>Alteración en la menstruación</h3>
            </div>
            <div class="cont_botonindex">
                <div class="contimgb">
                    <img class="imgb" src="{{ asset('img/obstaculo.png') }}" alt="">
                </div>
                <h3>Menstruación</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Buscar...">
            <button id="searchButton">Buscar</button>
        </div>
        <h2>Últimas Publicaciones</h2>
        <div class="card-grid latest-posts"></div>

        <h2>Más Vistos</h2>
        <div class="card-grid most-viewed"></div>
    </div>
</section>
@endsection

<script>
    // Obtener el elemento del mensaje
    var mensajeElemento = document.getElementById('mensaje');

    // Mostrar el mensaje temporal
    function mostrarMensaje(mensaje) {
        // Mostrar el mensaje
        mensajeElemento.textContent = mensaje;
        mensajeElemento.classList.add('mostrar');

        // Ocultar el mensaje después de 3 segundos
        setTimeout(function() {
            mensajeElemento.classList.remove('mostrar');
        }, 3000);
    }
</script>