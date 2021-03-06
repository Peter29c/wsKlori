<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RacionesDiariasPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raciones_diarias_plan', function (Blueprint $table) {
            $table->id('idRacionesDiariasPlan');
            $table->foreignId('idPlanSesion')->references('idPlanSesion')->on('plan_sesion');
            $table->foreignId('idGrupoAlimenticio')->references('idGrupoAlimenticio')->on('grupo_alimenticio');
            $table->smallInteger('caloriasTotales');
            $table->smallInteger('racionDiaria');
            $table->decimal('racionDiariaKcal', 6, 2);
            $table->dateTime('created_at', 0)->nullable();
            $table->dateTime('updated_at', 0)->nullable();
            $table->dateTime('deleted_at', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raciones_diarias_plan');
    }
}
