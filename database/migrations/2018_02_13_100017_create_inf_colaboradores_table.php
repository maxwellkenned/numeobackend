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
            $table->unsignedInteger('id_empresa')->default(1);
            $table->unsignedInteger('id_funcao')->nullable();
            $table->integer('id_conjuge')->nullable();
            $table->date('dt_admissao')->nullable();
            $table->double('salario', 8, 2)->nullable();
            $table->string('clt')->nullable();
            $table->string('clt_serie')->nullable();
            $table->string('clt_pis')->nullable();
            $table->string('inf_escolaridade')->nullable();
            $table->enum('frequencia_pagamento', ['H', 'D', 'S', 'M'])->nullable();
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
