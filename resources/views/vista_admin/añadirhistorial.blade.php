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
    <section id="main-section">
        <h2>Agregar Historial Medico</h2>
        <div class="container">
            <div>

               <label for="IdPaciente">Id del paciente:</label>
                <input type="text" id="IdPaciente" name="IdPaciente" value="intro valor paciente" readonly>

                <label for="PlamTerapeutico">Plan Terapeutico:</label>
                <input type="text" id="PlamTerapeutico" name="PlamTerapeutico">
            </div>
            <div>
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno">
                

            </div>
            
        </div>
        <h2>antecedentes personales no patologicos</h2> 
        <div class="container">
            <div>
                
                <label for="Trabajo">Trabajo:</label>
                <input type="text" id="Trabajo" name="Trabajo">

                <label for="himentacion"> himentacion:</label>
                <input type="text" id="himentacion" name="himentacion">

            </div>
            <div>
                <label for="condiciones">condiciones:</label>
                <input type="text" id="condiciones" name="condiciones">
                <label for="condiciones">condiciones:</label>
                <input type="text" id="condiciones" name="condiciones">
                <label for="habitosnocimos">habitos nocivos:</label>
                <input type="text" id="habitosnocimos" name="habitosnocimos">        

            </div>
        </div>
        <h2>antecedentes personales patologicos</h2> 
        <div class="container">
            <div>
                
                <label for="IntervencionesQ">Intervenciones quirurjicas:</label>
                <input type="text" id="IntervencionesQ" name="IntervencionesQ">
<!--modificado-->
                <label for="alergias"> alergias:</label>
                <input type="text" id="alergias" name="alergias">

            </div>
            <div>
                <label for="antecendentesMed">antecedentes medicos:</label>
                <input type="text" id="antecendentesMed" name="antecendentesMed">
            </div>
        </div>
        <h2>anemnesis y motivo de la consulta</h2> 
        <div class="container">
            <div>
                
                <label for="MotivoConsul">motivo de la consulta:</label>
                <input type="text" id="MotivoConsul" name="MotivoConsul">

                <label for="HistoriaEnferm"> historia de la enfermedad actual:</label>
                <input type="text" id="HistoriaEnferm" name="HistoriaEnferm">

            </div>
            <div>
                <label for="FuncionesBio">Funciones biologicas:</label>
                <input type="text" id="FuncionesBio" name="FuncionesBio">
            </div>

        </div>
        <h2>examen fisico</h2> 
        <div class="container">
            <div>
                
                <label for="ExamenCliGeneral">examen clinico General:</label>
                <input type="text" id="ExamenCliGeneral" name="ExamenCliGeneral">

            </div>
            <div>
                <label for="ExamenFisRegional">Examen fisico regional:</label>
                <input type="text" id="ExamenFisRegional" name="ExamenFisRegional">
            </div>
            <label for="Diagnostico">diagnostico:</label>
            <textarea id="detalle" name="detalle" rows="4" style="resize: none;"></textarea>
            <label for="ExamenCliGeneral">examen clinico General:</label>
            <textarea id="detalle" name="detalle" rows="4" readonly style="resize: none;"></textarea>

            <button type="submit">Registrar</button>
            <button type="button" onclick="window.close()">Salir</button>
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
