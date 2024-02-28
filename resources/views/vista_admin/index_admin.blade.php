<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@extends('vista_admin.app_admin')

@section('content')
<section id="main-section">
    
    <div class="presentacion"> 
        <div class="grid_cont_present">
            <div class="present_text">
                <h1 class="present_titulo">¿Quién me atenderá?</h1>
                <p class="present_descrip">¡Nos complace presentarte a nuestro destacado especialista en Ginecología y Obstetricia, el Dr. ..............! Con años de experiencia y un enfoque compasivo hacia cada paciente, el Dr. ........ se ha dedicado a brindar la más alta calidad de atención médica en el campo de la salud de la mujer.</p>
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