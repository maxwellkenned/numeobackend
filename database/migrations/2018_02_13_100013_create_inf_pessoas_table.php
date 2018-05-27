<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_pessoas', function (Blueprint $table) {
            $table->increments('id_pessoa');
            $table->unsignedInteger('id_cidade');
            $table->unsignedInteger('id_cidade_nascimento');
            $table->string('nome_pessoa');
            $table->enum('sexo', ['F', 'M']);
            $table->char('cpf', 11);
            $table->char('rg', 11);
            $table->string('rg_emissor');
            $table->char('rg_uf', 2);
            $table->string('email');
            $table->date('dt_nascimento');
            $table->string('endereco');
            $table->char('endereco_numero', 10);
            $table->char('cep', 10);
            $table->string('titulo');
            $table->string('titulo_zona');
            $table->string('titulo_secao');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->foreign('id_cidade')->references('id_cidade')->on('cidade');
            $table->foreign('id_cidade_nascimento')->references('id_cidade')->on('cidade');
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
        Schema::dropIfExists('inf_pessoas');
    }
}
