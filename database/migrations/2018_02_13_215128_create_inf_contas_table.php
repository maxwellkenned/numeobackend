<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_contas', function (Blueprint $table) {
            $table->increments('id_conta');
            $table->integer('id_empresa');
            $table->string('ds_conta');
            $table->double('saldo', 8, 2);
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
        Schema::dropIfExists('inf_contas');
    }
}
