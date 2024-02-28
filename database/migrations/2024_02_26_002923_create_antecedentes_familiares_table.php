<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesFamiliaresTable extends Migration
{
    public function up()
    {
        Schema::create('antecedentes_familiares', function (Blueprint $table) {
            $table->id('id_Antecedentes_Familiares');
            $table->string('Antecedentes_Gineco_Obstetricos')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antecedentes_familiares');
    }
}
