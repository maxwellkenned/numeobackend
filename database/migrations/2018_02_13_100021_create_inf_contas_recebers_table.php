<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfContasRecebersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_contas_receber', function (Blueprint $table) {
          $table->increments('id_conta_receber');
          $table->unsignedInteger('id_conta');
          $table->unsignedInteger('id_servico');
          $table->string('ds_recebimento');
          $table->double('valor', 8, 2);
          $table->integer('parcelas');
          $table->enum('status', ['R', 'A', 'C']);
          $table->foreign('id_conta')->references('id_conta')->on('inf_contas');
          $table->foreign('id_servico')->references('id_servico')->on('inf_servicos');
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
        Schema::dropIfExists('inf_contas_recebers');
    }
}
