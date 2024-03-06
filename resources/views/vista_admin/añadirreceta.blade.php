<!DOCTYPE html>
<html>
<head>
    <title>Registro de Recetas</title>
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<body>

    <header class="header">
        <img src="{{ asset('img/nom_logo.png') }}" alt="Logo" style="width: 300px; height: auto;">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="http://localhost/ginecologia/public/admin/index">Bienvenido Administrador</a></li>
                
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
        <h2>Agregar Receta</h2>
        <div class="container">
            <form action="{{ route('guardar_receta') }}" method="POST">
                @csrf
                <div>
                    <label for="IdPaciente">Id del paciente:</label>
                    <span>{{ $id }}</span>
                    <input type="hidden" id="IdPaciente" name="IdPaciente" value="{{ $id }}">
                </div>
                
                <div class="containerreceta">
                    <div>
                        <label for="Medicamento">Medicamento:</label>
                        <input type="text" id="Medicamento" name="Medicamento">
                        
                        <label for="Instrucciones">Instrucciones:</label>
                        <input type="text" id="Instrucciones" name="Instrucciones">
                        
                        <label for="Dosis">Dosis:</label>
                        <input type="text" id="Dosis" name="Dosis">
                        
                        <label for="Duracion">Duracion:</label>
                        <input type="text" id="Duracion" name="Duracion">
                        
                        <label for="Fecha_Receta">Fecha Receta:</label>
                        <input type="date" id="Fecha_Receta" name="Fecha_Receta">
                        
                        <label for="detalle">Detalle:</label>
                        <textarea id="detalle" name="detalle" rows="4"></textarea>
                    </div>
                </div>
                <button type="submit">Registrar</button>
                <button type="button" onclick="window.history.back();" id="btnSalir">Salir</button>

            </form>
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
