<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@extends('vista_admin.app_admin')

@section('content')

<link rel="stylesheet" href="{{ asset('css/registrospacientes2.css') }}">
<section id="main-section">
    <div class="table">
        <div class="table_header">
            <p>PACIENTES</p>
            <div>

                <input placeholder="Buscar"/>
                <a class="add_new" href="http://localhost/ginecologia/public/admin/registro/paciente" style="text-decoration: none;">+ Agregar Nuevo</a>

                
            
            </div>
            
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Dirección</th>
                        <th>Fecha Nacimiento</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5312347</td></ts>
                        <td>Cecilia</td>
                        <td>Quispe</td>
                        <td>Huanca</td>
                        <td>Achacachi</td>
                        <td>02/12/1996</td>
                        <td>73221312</td>
                        <td>cecilia@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>5312348</td>
                        <td>Carlos</td>
                        <td>Perez</td>
                        <td>Garcia</td>
                        <td>La Paz</td>
                        <td>03/05/1985</td>
                        <td>73221313</td>
                        <td>carlos@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>3</td>
                        <td>5312349</td>
                        <td>Ana</td>
                        <td>Gomez</td>
                        <td>Lopez</td>
                        <td>El Alto</td>
                        <td>15/09/1970</td>
                        <td>73221314</td>
                        <td>ana@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>4</td>
                        <td>5312350</td>
                        <td>Pedro</td>
                        <td>Ramirez</td>
                        <td>Castro</td>
                        <td>Cochabamba</td>
                        <td>25/06/1990</td>
                        <td>73221315</td>
                        <td>pedro@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>5</td>
                        <td>5312351</td>
                        <td>Luisa</td>
                        <td>Alvarez</td>
                        <td>Quispe</td>
                        <td>Santa Cruz</td>
                        <td>10/11/1982</td>
                        <td>73221316</td>
                        <td>luisa@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>6</td>
                        <td>5312352</td>
                        <td>Juan</td>
                        <td>Rojas</td>
                        <td>Mendez</td>
                        <td>Tarija</td>
                        <td>18/04/1975</td>
                        <td>73221317</td>
                        <td>juan@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>7</td>
                        <td>5312353</td>
                        <td>Maria</td>
                        <td>Chavez</td>
                        <td>Moreno</td>
                        <td>Potosi</td>
                        <td>29/08/1998</td>
                        <td>73221318</td>
                        <td>maria@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>5312354</td>
                        <td>Manuel</td>
                        <td>Jimenez</td>
                        <td>Gutierrez</td>
                        <td>Oruro</td>
                        <td>12/07/1988</td>
                        <td>73221319</td>
                        <td>manuel@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>9</td>
                        <td>5312355</td>
                        <td>Isabel</td>
                        <td>Flores</td>
                        <td>Cruz</td>
                        <td>Sucre</td>
                        <td>20/03/1995</td>
                        <td>73221320</td>
                        <td>isabel@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>10</td>
                        <td>5312356</td>
                        <td>Antonio</td>
                        <td>Mendoza</td>
                        <td>Valencia</td>
                        <td>Beni</td>
                        <td>05/09/1980</td>
                        <td>73221321</td>
                        <td>antonio@gmail.com</td>
                        <td>
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                            <button><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    

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