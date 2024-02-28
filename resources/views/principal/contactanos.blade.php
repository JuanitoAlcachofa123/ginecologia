<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('layouts.app')

@section('content')
    <section id="main-section">
        <!-- Contenido de la página de Contacto -->
        <div class="contcontact">
            <div class="gridcontactanos">
                <div class="contcontact">
                    <div class="gridconttarjcont">
                        <div class="contimg"><img src="img/whatsapp.png" alt=""></div>
                        <div class="textocontact">
                            <p>Contáctanos a nuestro WhatsApp</p><br>
                            <p class="pcon">+5917204652</p>
                        </div>
                    </div>
                </div>
                <div class="contcontact">
                    <div class="gridconttarjcont">
                        <div class="contimg"><img src="img/telefono.png" alt=""></div>
                        <div class="textocontact">
                            <p>Llámanos y reserva tu consulta</p><br>
                            <p class="pcon">7204652</p>
                        </div>
                    </div>
                </div>
                <div class="contcontact">
                    <div class="gridconttarjcont">
                        <div class="contimg"><img src="img/correo-electronico.png" alt=""></div>
                        <div class="textocontact">
                            <p>Envíanos un correo electrónico</p><br>
                            <p class="pcon">hugalma@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
