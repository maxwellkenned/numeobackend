<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfVendasServicosItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_vendas_servicos_itens', function (Blueprint $table) {
            $table->increments('id_item');
            $table->unsignedInteger('id_servico');
            $table->unsignedInteger('id_venda');
            $table->double('vl_servico');
            $table->double('quantidade');
            $table->double('vl_desconto')->nullable();
            $table->double('pc_desconto')->nullable();
            $table->string('obs')->nullable();
            $table->foreign('id_servico')->references('id_servico')->on('inf_servicos');
            $table->foreign('id_venda')->references('id_venda')->on('inf_vendas_servicos');
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
        Schema::dropIfExists('inf_vendas_servicos_itens');
    }
}
