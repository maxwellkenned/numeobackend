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
            $table->string('email')->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('endereco')->nullable();
            $table->string('endereco_numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable()->default('Brasil');
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
