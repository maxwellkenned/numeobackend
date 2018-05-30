<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfVendasServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_vendas_servicos', function (Blueprint $table) {
            $table->increments('id_venda');
            $table->unsignedInteger('id_cliente');
            $table->unsignedInteger('id_vendedor');
            $table->unsignedInteger('id_empresa')->default(1);
            $table->dateTime('dt_venda')->default(now());
            $table->double('vl_venda');
            $table->double('vl_desconto')->nullable();
            $table->double('pc_desconto')->nullable();
            $table->string('obs')->nullable();
            $table->foreign('id_cliente')->references('id_cliente')->on('inf_clientes');
            $table->foreign('id_vendedor')->references('id_colaborador')->on('inf_colaboradores');
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
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
        Schema::dropIfExists('inf_vendas_servicos');
    }
}
