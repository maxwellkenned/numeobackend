<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfDocumentosContabeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_documentos_contabeis', function (Blueprint $table) {
            $table->increments('id_documento');
            $table->integer('id_conta_pagar');
            $table->string('local');
            $table->foreign('id_conta_pagar')->references('id_conta_pagar')->on('inf_contas_pagar');
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
        Schema::dropIfExists('inf_documentos_contabeis');
    }
}
