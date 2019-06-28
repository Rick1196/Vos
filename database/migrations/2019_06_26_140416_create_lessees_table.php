<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_house')->unsigned();
            $table->foreign('id_house')->references('id')->on('houses')->onDelete('cascade');
            $table->bigInteger('id_residente')->unsigned();
            $table->foreign('id_residente')->references('id')->on('residents')->onDelete('cascade');
            $table->bigInteger('id_arrendated')->unsigned();
            $table->foreign('id_arrendated')->references('id')->on('arrendated_houses')->onDelete('cascade');
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
        Schema::dropIfExists('lessees');
    }
}
