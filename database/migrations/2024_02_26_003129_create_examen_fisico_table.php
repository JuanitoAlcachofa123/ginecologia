<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenFisicoTable extends Migration
{
    public function up()
    {
        Schema::create('examen_fisico', function (Blueprint $table) {
            $table->id('id_Examen_Fisico');
            $table->string('Examen_Clinico_General')->nullable();
            $table->string('Examen_Clinico_Regional')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('examen_fisico');
    }
}
