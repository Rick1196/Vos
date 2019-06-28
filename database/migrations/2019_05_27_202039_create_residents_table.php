<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');

            // clave foranea de la tabla tipos de residentes
            $table->bigInteger('type_of_resident_id')->unsigned();
            $table->foreign('type_of_resident_id')->references('id')
                ->on('type_of_residents')
                ->onDelete('cascade');

            // clave foranea de la tabla tipos de residentes
            $table->bigInteger('relatives_id')->unsigned()->nullable();
            $table->foreign('relatives_id')->references('id')
                ->on('residents')
                ->onDelete('cascade');

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
        Schema::dropIfExists('residents');
    }
}
