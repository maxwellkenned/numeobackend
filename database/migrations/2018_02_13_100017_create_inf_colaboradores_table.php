<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_colaboradores', function (Blueprint $table) {
            $table->increments('id_colaborador');
            $table->unsignedInteger('id_pessoa');
            $table->unsignedInteger('id_empresa');
            $table->unsignedInteger('id_funcao');
            $table->integer('id_conjuge');
            $table->date('dt_admissao');
            $table->double('salario', 8, 2);
            $table->string('clt');
            $table->string('clt_serie');
            $table->string('clt_pis');
            $table->string('inf_escolaridade');
            $table->enum('frequencia_pagamento', ['H', 'D', 'S', 'M']);
            $table->foreign('id_pessoa')->references('id_pessoa')->on('inf_pessoas');
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
            $table->foreign('id_funcao')->references('id_funcao')->on('funcoes');
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
        Schema::dropIfExists('inf_colaboradores');
    }
}
