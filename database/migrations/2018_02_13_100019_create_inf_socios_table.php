<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_socios', function (Blueprint $table) {
            $table->increments('id_sociedade');
            $table->unsignedInteger('id_empresa');
            $table->unsignedInteger('id_colaborador');
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
            $table->foreign('id_colaborador')->references('id_colaborador')->on('inf_colaboradores');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inf_socios');
    }
}
