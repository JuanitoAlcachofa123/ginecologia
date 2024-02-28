<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesisYMotivoDeConsultaTable extends Migration
{
    public function up()
    {
        Schema::create('anamnesis_y_motivo_de_consulta', function (Blueprint $table) {
            $table->id('id_Anamnesis_y_Motivo_de_Consulta');
            $table->string('Motivo_de_Consulta')->nullable();
            $table->string('Historia_de_la_Enfermedad_Actual')->nullable();
            $table->string('Funciones_Biologicas')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anamnesis_y_motivo_de_consulta');
    }
}
