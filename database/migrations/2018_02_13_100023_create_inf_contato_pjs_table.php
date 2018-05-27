<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfContatoPjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inf_contato_pj', function (Blueprint $table) {
            $table->increments('id_contato');
            $table->unsignedInteger('id_pessoa');
            $table->string('ds_pessoa');
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
        Schema::dropIfExists('inf_contato_pjs');
    }
}
