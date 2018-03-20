<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->integer('id_empresa');
            $table->integer('id_categoria');
            $table->string('ds_produto');
            $table->double('vl_produto', 8, 2);
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
            $table->foreign('id_categoria')->references('id_categoria')->on('inf_categorias_produtos');
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
        Schema::dropIfExists('inf_produtos');
    }
}
