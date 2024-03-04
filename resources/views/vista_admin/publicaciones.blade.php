<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@extends('vista_admin.app_admin')

@section('content')

<link rel="stylesheet" href="{{ asset('css/registropacientes3.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<section id="main-section">

    <div class="table">
        <div class="table_header">
            <p>PACIENTES</p>
            <div>
                <input class="placeholderB" placeholder="Buscar"/>
                <a class="add_new" href="http://localhost/ginecologia/public/admin/publicaciones/registro" style="text-decoration: none;">+ Agregar Nuevo</a>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Video</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Título 1</td>
                        <td>Descripción 1</td>
                        <td><img class="imgcrudart" src="img/colposcopio.png" alt="Imagen 1"></td>
                        <td><video class="pm4crudart" src="ruta_del_video_1.mp4" controls></video></td>
                        <td>
                            <button class="btncrud"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btncrud"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Título 2</td>
                        <td>Descripción 2</td>
                        <td><img class="imgcrudart" src="img/embarazo2.jpg" alt="Imagen 2"></td>
                        <td><video class="pm4crudart" src="ruta_del_video_2.mp4" controls></video></td>
                        <td>
                            <button class="btncrud"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btncrud"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Repite esta estructura para agregar más filas -->
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <div><i class="fa-solid fa-angles-left"></i></div>
            <div><i class="fa-solid fa-chevron-left"></i></div>
            <div>1</div>
            <div>2</div>
            <div><i class="fa-solid fa-chevron-right"></i></div>
            <div><i class="fa-solid fa-angles-right"></i></div>
        </div>
    </div>
</section>


@endsection

