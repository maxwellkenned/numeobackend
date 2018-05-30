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
        Schema::create('conf_usuarios', function (Blueprint $table) {
            $table->unsignedInteger('id_pessoa');
            $table->integer('id_perfil')->nullable();
            $table->string('usuario');
            $table->string('senha')->nullable();
            $table->datetime('dt_expiracao')->nullable();
            $table->enum('status', ['A', 'B'])->nullable();
            $table->primary('id_pessoa');
            $table->foreign('id_pessoa')->references('id_pessoa')->on('inf_pessoas');
//            $table->foreign('id_perfil')->references('id_perfil')->on('conf_perfil');
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
        Schema::dropIfExists('conf_usuarios');
    }
}
