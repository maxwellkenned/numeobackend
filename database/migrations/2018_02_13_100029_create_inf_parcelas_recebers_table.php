<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfParcelasRecebersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_parcelas_receber', function (Blueprint $table) {
            $table->increments('id_parcela');
            $table->unsignedInteger('id_conta_receber');
            $table->integer('parcela');
            $table->double('valor', 8, 2);
            $table->double('valor_juros', 8, 2);
            $table->double('valor_desconto', 8, 2);
            $table->double('valor_total', 8, 2);
            $table->datetime('dt_vencimento');
            $table->datetime('dt_recebimento');
            $table->enum('status', ['R', 'A', 'C']);
            $table->foreign('id_conta_receber')->references('id_conta_receber')->on('inf_contas_receber');
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
        Schema::dropIfExists('inf_parcelas_recebers');
    }
}
