<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfNotasFiscaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_notas_fiscais', function (Blueprint $table) {
            $table->increments('id_nota');
            $table->integer('id_empresa');
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
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
        Schema::dropIfExists('inf_notas_fiscais');
    }
}
