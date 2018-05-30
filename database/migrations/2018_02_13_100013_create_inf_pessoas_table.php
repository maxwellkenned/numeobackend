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
            $table->unsignedInteger('id_cidade')->nullable();
            $table->unsignedInteger('id_cidade_nascimento')->nullable();
            $table->string('nome_pessoa');
            $table->enum('sexo', ['F', 'M'])->nullable();
            $table->char('cpf', 11)->nullable();
            $table->char('rg', 11)->nullable();
            $table->string('rg_emissor')->nullable();
            $table->char('rg_uf', 2)->nullable();
            $table->string('email')->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('endereco')->nullable();
            $table->char('endereco_numero', 10)->nullable();
            $table->char('cep', 10)->nullable();
            $table->string('titulo')->nullable();
            $table->string('titulo_zona')->nullable();
            $table->string('titulo_secao')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
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
