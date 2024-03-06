<!DOCTYPE html>
<html>
<head>
    <title>Datos de Paciente</title>
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<body>
    <header class="header">
        <img src="{{ asset('img/nom_logo.png') }}" alt="Logo" style="width: 300px; height: auto;">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="http://localhost/ginecologia/public/admin/index">Inicio</a></li>
                
                <li><a class="respli" href="http://localhost/ginecologia/public/contactanos">Contactanos</a></li>
                
            </ul>
        </nav>
        <div class="barrs">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <a class="btn" href="http://localhost/ginecologia/public/admin/publicaciones"><div class="button">Publicaciones</div></a>
        <a class="btn" href="http://localhost/ginecologia/public/admin/registro"><div class="button">Registros</div></a>
    </header>

    <div class="headerhistorial">
        <p> Paciente: <span class="nombrePaciente">{{ $paciente->Nombres }} {{ $paciente->Apellidos }}</span></p>
        <a class="botonheadhist" href="{{ route('paciente.mostrar_historial', ['pacienteId' => $paciente->ID_Paciente]) }}" style="text-decoration: none;">+ Agregar historial medico</a>
        <a class="botonheadhist" href="{{ route('paciente.mostrar_receta', ['pacienteId' => $paciente->ID_Paciente]) }}" style="text-decoration: none;">+ Agregar Receta</a>


    </div>

    <!-- Mostrar todos los datos del paciente en un div -->
    <div class="gridprintHistorialM">
    <div  class="conthistprint">
        <h2>Datos del Paciente</h2>
        <p>Nombres: <span class="condicionVida" >{{ $paciente->Nombres }}</span></p>
        <p>Apellidos: <span class="condicionVida" >{{ $paciente->Apellidos }}</span></p>
        <p>Sexo: <span class="condicionVida" >{{ $paciente->Sexo }}</span></p>
        <p>Edad: <span class="condicionVida" >{{ $paciente->Edad }}</span></p>
        <p>Estado Civil: <span class="condicionVida" >{{ $paciente->Estado_Civil }}</span></p>
        <p>Residencia: <span class="condicionVida" >{{ $paciente->Residencia }}</span></p>
        <p>Email: <span class="condicionVida" >{{ $paciente->email }}</span></p>
        <p>Celular: <span class="condicionVida" >{{ $paciente->Celular }}</span></p>
        <p>Tipo de Sangre: <span class="condicionVida" >{{ $paciente->Tipo_de_Sangre }}</span></p>
        <p>Peso: <span class="condicionVida" >{{ $paciente->Peso }}</span></p>
        <p>Talla: <span class="condicionVida" >{{ $paciente->Talla }}</span></p>
        <p>Detalle: <span class="condicionVida" >{{ $paciente->Detalle }}</span></p>
        <!-- Agrega los demás campos que desees mostrar -->
    </div>
    </div>

    <section id="main-section">

    
        <div class="contenthistprint">
            <h2>HISTORIAL MÉDICO</h2>
            <div class="gridprintHistorialM">
<div class="conthistprint">
<h3>ANTECEDENTES PERSONALES NO PATOLOGICOS</h3><!--texto font weight p bold y span en light-->
<p>condiciones de vida: <span class="condicionVida" >Lorem, ipsum dolor.</span></p>
<p>Alimentación: <span class="Alimentación">Lorem, ipsum dolor.</span></p>
<p>Frecuencia de ejercicio: <span class="FrecuenciaEjercicios" >Lorem ipsum dolor.</span></p>
<p>Hábitos nocivos: <span class="HabitosNocivos">Lorem ipsum dolor.</span></p>
<p>Plan terapéutico: <span class="PlanTerapeutico">Lorem ipsum dolor.</span></p>
<h3>ANAMNESIS Y MOTIVOS DE CONSULTA</h3>
<p>Motivo de consulta: <span class="MotivoConsulta">Lorem ipsum dolor.</span></p>
<p>Historia de la enfermedad actual: <span class="HistoriaEnfermedad">Lorem ipsum dolor.</span></p>
<p>Funciones biológicas: <span class="FuncionesBiologicas">Lorem ipsum dolor.</span></p>
<h3>EXAMEN FÍSICO</h3>
<p>Examen clínico general: <span class="ExamenClinicoGeneral">Lorem ipsum dolor.</span></p>
<p>Examen clínico regional: <span class="ExamenClinicoRegional">Lorem ipsum dolor.</span></p>
<h3>ANTECEDENTES </h3>
<p>Alergias: <span class="Alergias">Lorem ipsum dolor.</span></p>
<p>Antecedentes médicos: <span class="AntecedentesMedicos">Lorem ipsum dolor.</span></p>
<p>Intervenciones Quirúrgicas: <span class="IntervencionQuirurgicas">Lorem ipsum dolor.</span></p>
</div>
<div class="fechacont">
    <p>fecha: <span class="fechaHistorialM">01/02/2024</span></p>
</div>
<div>
    <a class="boton"  href="contactanos.html">Editar</a>
    <div class="boton" onclick="imprimirHist()">Imprimir Reporte</div>
</div>
</div>
        </div>
        <div class="ContentRecetasPrint">
            <h2>RECETAS</h2>
            <div class="gridrecetas">
              <div class="tarjeta_ContentRecetasPrint">
                <div class="gridtarjetareceta">
                    <div>
                        <p>Fecha: <span class="FechaRecetas">Lorem ipsum dolor.</span></p>
                        <p>Medicamento: <span class="Medicamento">Lorem ipsum dolor.</span></p>
                        <p>Dosis: <span class="Dosis">Lorem ipsum dolor.</span></p>
                        <p>Duracion: <span class="Duracion">Lorem ipsum dolor.</span></p>
                        <p>Observaciones: <span class="ObservacionesRecetas">Lorem ipsum dolor.</span></p> 
                    </div>
                    <div>
                        <a class="boton" href="#">Editar</a>
                        <div class="boton" onclick="imprimirRe()">Imprimir Receta</div>
                    </div>
                </div>
              </div>
              <div class="tarjeta_ContentRecetasPrint">
                <div class="gridtarjetareceta">
                    <div>
                        <p>Fecha: <span class="FechaRecetas">Lorem ipsum dolor.</span></p>
                        <p>Medicamento: <span class="Medicamento">Lorem ipsum dolor.</span></p>
                        <p>Dosis: <span class="Dosis">Lorem ipsum dolor.</span></p>
                        <p>Duracion: <span class="Duracion">Lorem ipsum dolor.</span></p>
                        <p>Observaciones: <span class="ObservacionesRecetas">Lorem ipsum dolor.</span></p> 
                    </div>
                    <div>
                        <a class="boton" href="#">Editar</a>
                        <div class="boton" onclick="imprimirRe()">Imprimir Receta</div>
                    </div>
                </div>
              </div>
              <div class="tarjeta_ContentRecetasPrint">
                <div class="gridtarjetareceta">
                    <div>
                        <p>Fecha: <span class="FechaRecetas">Lorem ipsum dolor.</span></p>
                        <p>Medicamento: <span class="Medicamento">Lorem ipsum dolor.</span></p>
                        <p>Dosis: <span class="Dosis">Lorem ipsum dolor.</span></p>
                        <p>Duracion: <span class="Duracion">Lorem ipsum dolor.</span></p>
                        <p>Observaciones: <span class="ObservacionesRecetas">Lorem ipsum dolor.</span></p> 
                    </div>
                    <div>
                        <a class="boton" href="#">Editar</a>
                        <div class="boton" onclick="imprimirRe()">Imprimir Receta</div>
                    </div>
                </div>
              </div>  
            </div>
        </div>
    </section>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d956.3253896039695!2d-68.12538353042213!3d-16.51086671320891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAv.%206%20de%20Agosto%20N%C2%BA%202548%20Edificio%20LA%20SANTE%205to%20Piso%200000!5e0!3m2!1ses-419!2sbo!4v1708490995168!5m2!1ses-419!2sbo" width="317" height="232" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
                <h2>NOS ENCONTRAMOS</h2>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=100083104093472&mibextid=ZbWKwL" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>

                </div>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Correo:<br> hugalma@hotmail.com</p>
                <p>Direccion: <br>Av. 6 de Agosto Nº 2548 Edificio LA SANTE 5to Piso</p>
              <p>Numero telefonico:
                <br> +59172046452
              </p>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>ginecologiayobstetricia</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>
