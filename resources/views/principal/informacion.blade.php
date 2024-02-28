<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('layouts.app')

@section('content')
    <section id="main-section">
        <!-- Contenido de la página de Información -->
        <div class="contenarticulo">
            <div class="gridcontart">
                <div class="textcontart">
                    <h2>CONTROL PRENATAL</h2>
                    <p>El control prenatal es un componente fundamental de la atención médica durante el embarazo, destinado a garantizar la salud y el bienestar tanto de la madre como del feto. Consiste en una serie de consultas médicas regulares realizadas por un profesional de la salud, generalmente un obstetra o ginecólogo, para monitorear el progreso del embarazo y detectar cualquier problema o complicación potencial.
                        <br>
                        Durante el control prenatal, se realizan una serie de pruebas, exámenes físicos y evaluaciones para asegurar que el embarazo progrese de manera saludable. Esto incluye la medición de la presión arterial, la monitorización del peso y la altura uterina, la realización de análisis de sangre y orina, y la realización de ecografías para evaluar el crecimiento y desarrollo del feto.
                </div>
                <div class="imgarti">
                    <img src="img/embarazo2.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="contvid">
            <p>TITULO DE VIDEO</p>
            <div class="video-w">
                <video controls>
                    <source src="video/y2mate.com - Cronología Así se vivió el 11 de septiembre de 2001  Noticias Telemundo_1080p.mp4" type="video/mp4">
                </video>
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
