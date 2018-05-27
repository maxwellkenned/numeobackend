<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfContasPagarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_contas_pagar', function (Blueprint $table) {
            $table->increments('id_conta_pagar');
            $table->unsignedInteger('id_conta');
            $table->unsignedInteger('id_ds_conta');
            $table->unsignedInteger('id_produto');
            $table->unsignedInteger('prolabore');
            $table->string('ds_pagamento');
            $table->double('valor', 8, 2);
            $table->integer('parcelas');
            $table->enum('status', ['P', 'A', 'C']);
            $table->foreign('id_conta')->references('id_conta')->on('inf_contas');
            $table->foreign('id_ds_conta')->references('id_ds_conta')->on('descricao_contas');
            $table->foreign('id_produto')->references('id_produto')->on('inf_produtos');
            $table->foreign('prolabore')->references('id_sociedade')->on('inf_socios');
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
        Schema::dropIfExists('inf_contas_pagars');
    }
}
