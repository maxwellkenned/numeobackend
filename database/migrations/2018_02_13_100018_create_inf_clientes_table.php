<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->unsignedInteger('id_empresa')->default(1);
            $table->string('nome_cliente');
            $table->enum('sexo', ['F', 'M'])->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('rg', 11)->nullable();
            $table->string('email');
            $table->date('dt_nascimento')->nullable();
            $table->string('endereco');
            $table->string('endereco_numero');
            $table->string('complemento')->nullable();
            $table->string('cep', 8);
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais')->default('Brasil');
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
        Schema::dropIfExists('inf_clientes');
    }
}
