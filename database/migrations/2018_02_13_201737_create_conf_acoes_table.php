<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfAcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_acoes', function (Blueprint $table) {
            $table->increments('id_acao');
            $table->integer('id_controlador');
            $table->string('ds_acao');
            $table->foreign('id_controlador')->references('id_controlador')->on('conf_controlador');
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
        Schema::dropIfExists('conf_acoes');
    }
}
