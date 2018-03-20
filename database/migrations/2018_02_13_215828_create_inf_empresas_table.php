<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_empresas', function (Blueprint $table) {
            $table->increments('id_empresa');
            $table->integer('id_pessoa');
            $table->char('cnpj', 16);
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('email');
            $table->foreign('id_pessoa')->references('id_pessoa')->on('inf_pessoas');
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
        Schema::dropIfExists('inf_empresas');
    }
}
