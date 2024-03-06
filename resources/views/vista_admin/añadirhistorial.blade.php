<!DOCTYPE html>
<html>
<head>
    <title>Registro de Historial Medico</title>
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<body>
    <header class="header">
        <img src="{{ asset('img/nom_logo.png') }}" alt="Logo" style="width: 300px; height: auto;">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="http://localhost/ginecologia/public/admin/index">Volver al Inicio</a></li>
                
                <li><a class="respli" href="http://localhost/ginecologia/public/contactanos">Contáctanos</a></li>
                
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
    <section id="main-section">
        <h2>Agregar Historial Medico</h2>
        <form action="{{ route('guardar_historial') }}" method="POST">
            @csrf
            <div class="container">
                <label for="IdPaciente">Id del paciente:</label>
                <input type="text" id="IdPaciente" name="IdPaciente" value="{{ $id }}" readonly>

                <label for="PlamTerapeutico">Plan Terapéutico:</label>
                <input type="text" id="PlamTerapeutico" name="Plan_Terapeutico">

                <label for="Fecha_Receta">Fecha:</label>
                <input type="date" id="fecha" name="fecha">
            </div>
            
            <h2>Antecedentes Personales no Patológicos</h2> 
            <div class="container">
                <label for="Trabajo">Trabajo:</label>
                <input type="text" id="Trabajo" name="Trabajo">

                <label for="himentacion">Alimentación:</label>
                <input type="text" id="Alimentacion" name="Alimentacion">

                <label for="condiciones">Condiciones de vivienda:</label>
                <input type="text" id="Condiciones_de_Vivienda" name="Condiciones_de_Vivienda">

                <label for="condiciones">Habitos Nocivos:</label>
                <input type="text" id="Habitos_Nocivos" name="Habitos_Nocivos">

                <label for="habitosnocimos">Frecuencia de Ejercicios:</label>
                <input type="text" id="Frecuencia_de_Ejercicio" name="Frecuencia_de_Ejercicio">
            </div>
            
            <h2>Antecedentes Personales Patológicos</h2> 
            <div class="container">
                <label for="IntervencionesQ">Intervenciones quirúrgicas:</label>
                <input type="text" id="Intervenciones_Quirurgicas_Accidentes" name="Intervenciones_Quirurgicas_Accidentes">

                <label for="alergias">Alergias:</label>
                <input type="text" id="Alergias_Reacciones_Adversas_Farmacologicas" name="Alergias_Reacciones_Adversas_Farmacologicas">

                <label for="antecendentesMed">Antecedentes médicos:</label>
                <input type="text" id="Antecedentes_Medicos" name="Antecedentes_Medicos">
            </div>
            
            <h2>Anamnesis y Motivo de la Consulta</h2> 
            <div class="container">
                <label for="MotivoConsul">Motivo de la consulta:</label>
                <input type="text" id="Motivo_de_Consulta" name="Motivo_de_Consulta">

                <label for="HistoriaEnferm">Historia de la enfermedad actual:</label>
                <input type="text" id="Historia_de_la_Enfermedad_Actual" name="Historia_de_la_Enfermedad_Actual">

                <label for="FuncionesBio">Funciones biológicas:</label>
                <input type="text" id="Funciones_Biologicas" name="Funciones_Biologicas">
            </div>
            
            <h2>Examen Físico</h2> 
            <div class="container">
                <label for="ExamenCliGeneral">Examen clínico general:</label>
                <input type="text" id="Examen_Clinico_General" name="Examen_Clinico_General">

                <label for="ExamenFisRegional">Examen físico regional:</label>
                <input type="text" id="Examen_Clinico_Regional" name="Examen_Clinico_Regional">

                <label for="Diagnostico">Diagnóstico:</label>
                <textarea id="Diagnostico" name="Diagnostico" rows="4"></textarea>

                <label for="AntecedentesGinecoObstetrico">Antecedentes Gineco Obstétrico:</label>
                <textarea id="Antecedentes_Gineco_Obstetricos" name="Antecedentes_Gineco_Obstetricos" rows="4" ></textarea>
            
            
            <button type="submit">Registrar</button>
            <button type="button" onclick="window.history.back();" id="btnSalir">Salir</button>

        </div>
        </form>
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
                <p>Dirección: <br>Av. 6 de Agosto Nº 2548 Edificio LA SANTE 5to Piso</p>
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
