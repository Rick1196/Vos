<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('estado');
            $table->bigInteger('habitantes');
            $table->bigInteger('id_condominio')->unsigned();
            $table->foreign('id_condominio')->references('id')->on('condominia')->onDelete('cascade');
            $table->bigInteger('id_residente')->unsigned();
            $table->foreign('id_residente')->references('id')->on('residents')->onDelete('cascade');
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
        Schema::dropIfExists('houses');
    }
}
