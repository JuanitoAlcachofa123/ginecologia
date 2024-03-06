<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@extends('vista_admin.app_admin')

@section('content')

<link rel="stylesheet" href="{{ asset('css/registropacientes3.css') }}">
<section id="main-section">
    <div class="table">
        <div class="table_header">
            <p>PACIENTES</p>
            <div class="table_header">

                <form method="GET" action="{{ route('paciente.buscar') }}">
                    <input type="text" name="search" placeholder="Buscar-Press Enter"/>
                    
                </form>
                <a class="add_new" href="http://localhost/ginecologia/public/admin/registro/paciente" style="text-decoration: none;">+ Agregar Nuevo</a>

                
            
            </div>
            
        </div>  

        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Edad</th>
                        <th>Estado Civil</th>                        
                        <th>Residencia</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Tipo de Sangre</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr onclick="redirectToPaciente('{{ $paciente->ID_Paciente }}')">
                        
                        <td>{{ $paciente->ID_Paciente }}</td>
                        <td>{{ $paciente->CI }}</td>
                        <td>{{ $paciente->Nombres }}</td>
                        <td>{{ $paciente->Apellidos }}</td>
                        <td>{{ $paciente->Sexo }}</td>
                        <td>{{ $paciente->Edad }}</td>
                        <td>{{ $paciente->Estado_Civil }}</td>
                        <td>{{ $paciente->Residencia }}</td>
                        <td>{{ $paciente->email }}</td>
                        <td>{{ $paciente->Celular }}</td>
                        <td>{{ $paciente->Tipo_de_Sangre }}</td>
                        <td>{{ $paciente->Peso }}</td>
                        <td>{{ $paciente->Talla }}</td>

                        

                        <td class="tddobleclick" >
                            <form id="pacienteFormulario{{$paciente->ID_Paciente}}" method="Post" action="/{{$paciente->ID_Paciente}}">
                                @csrf
                            </form>
                        </td>  
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        

    </div>
</section>

<script>
    function activarPacienteFormulario(id){
       var formulario = document.getElementById("pacienteFormulario" + id);
       formulario.submit();
    }
</script>

<script>
    function redirectToPaciente(id) {
       window.location.href = 'http://localhost/ginecologia/public/admin/registro/datos_paciente/' + id;
    }
</script>
@endsection

