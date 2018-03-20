<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfPerfilAcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_perfil_acao', function (Blueprint $table) {
            $table->integer('id_perfil');
            $table->integer('id_acao');
            $table->primary(['id_perfil','id_acao']);
            $table->foreign('id_perfil')->references('id_perfil')->on('conf_perfil');
            $table->foreign('id_acao')->references('id_acao')->on('conf_acoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conf_perfil_acaos');
    }
}
