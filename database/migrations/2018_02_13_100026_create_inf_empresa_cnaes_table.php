<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfEmpresaCnaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_empresa_cnae', function (Blueprint $table) {
            $table->unsignedInteger('id_empresa');
            $table->unsignedInteger('id_cnae');
            $table->primary(['id_empresa', 'id_cnae']);
            $table->foreign('id_empresa')->references('id_empresa')->on('inf_empresas');
            $table->foreign('id_cnae')->references('id_cnae')->on('cnae');
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
        Schema::dropIfExists('inf_empresa_cnaes');
    }
}
