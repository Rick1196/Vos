<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_visitante')->unsigned();
            $table->foreign('id_visitante')->references('id')->on('visitors')->onDelete('cascade');
            $table->bigInteger('id_vigilante')->unsigned();
            $table->foreign('id_vigilante')->references('id')->on('vigilants')->onDelete('cascade');
            $table->bigInteger('id_casa')->unsigned();
            $table->foreign('id_casa')->references('id')->on('houses')->onDelete('cascade');
            $table->date('fecha_visita');
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
        Schema::dropIfExists('visits');
    }
}
