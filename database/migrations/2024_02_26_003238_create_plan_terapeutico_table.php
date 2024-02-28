<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTerapeuticoTable extends Migration
{
    public function up()
    {
        Schema::create('plan_terapeutico', function (Blueprint $table) {
            $table->id('id_Plan_Terapeutico');
            $table->string('Plan_Terapeutico')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plan_terapeutico');
    }
}
