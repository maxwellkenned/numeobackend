<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfAuxiliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_auxilios', function (Blueprint $table) {
            $table->integer('id_colaborador');
            $table->integer('id_auxilio');
            $table->double('vl_auxilio', 8 , 2);
            $table->primary(['id_colaborador', 'id_auxilio']);
            $table->foreign('id_colaborador')->references('id_colaborador')->on('inf_colaboradores');
            $table->foreign('id_auxilio')->references('id_auxilio')->on('auxilios');
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
        Schema::dropIfExists('inf_auxilios');
    }
}
