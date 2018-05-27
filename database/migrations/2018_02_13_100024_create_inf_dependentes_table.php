<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_dependentes', function (Blueprint $table) {
            $table->increments('id_dependente');
            $table->unsignedInteger('id_colaborador');
            $table->string('nome_dependente');
            $table->date('dt_nascimento');
            $table->foreign('id_colaborador')->references('id_colaborador')->on('inf_colaboradores');
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
        Schema::dropIfExists('inf_dependentes');
    }
}
