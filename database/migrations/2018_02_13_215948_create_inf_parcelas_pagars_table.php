<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfParcelasPagarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_parcelas_pagar', function (Blueprint $table) {
            $table->increments('id_parcela');
            $table->integer('id_conta_pagar');
            $table->integer('parcela');
            $table->double('valor', 8, 2);
            $table->double('valor_juros', 8, 2);
            $table->double('valor_desconto', 8, 2);
            $table->double('valor_total', 8, 2);
            $table->datetime('dt_vencimento');
            $table->datetime('dt_pagamento');
            $table->enum('status', ['P', 'A', 'C']);
            $table->foreign('id_conta_pagar')->references('id_conta_pagar')->on('inf_conta_pagar');
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
        Schema::dropIfExists('inf_parcelas_pagars');
    }
}
