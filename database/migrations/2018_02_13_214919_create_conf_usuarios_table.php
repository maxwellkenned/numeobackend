<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_usuario', function (Blueprint $table) {
            $table->integer('id_pessoa');
            $table->integer('id_perfil');
            $table->string('usuario');
            $table->string('senha');
            $table->datetime('dt_expiracao');
            $table->enum('status', ['A', 'B']);
            $table->primary(['id_pessoa', 'id_perfil']);
            $table->foreign('id_pessoa')->references('id_pessoa')->on('conf_pessoas');
            $table->foreign('id_perfil')->references('id_perfil')->on('conf_perfil');
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
        Schema::dropIfExists('conf_usuario');
    }
}
