<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfControladorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_controlador', function (Blueprint $table) {
            $table->increments('id_controlador');
            $table->unsignedInteger('id_modulo');
            $table->string('ds_controlador');
            $table->foreign('id_modulo')->references('id_modulo')->on('conf_modulo');
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
        Schema::dropIfExists('conf_controladors');
    }
}
