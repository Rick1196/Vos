<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            // clave foranea de la tabla type_of_visitor
            $table->bigInteger('type_visitor_id')->unsigned();
            $table->foreign('type_visitor_id')->references('id')->on('type_of_visitors')->onDelete('cascade');


            //clave foranea de la tabla credentials
            $table->bigInteger('credential_id')->unsigned();
            $table->foreign('credential_id')->references('id')->on('credentials')->onDelete('cascade');

            //clave foranea de la tabla conveyances
            $table->bigInteger('type_conveyance_id')->unsigned();
            $table->foreign('type_conveyance_id')->references('id')->on('conveyances')->onDelete('cascade');

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
        Schema::dropIfExists('visitors');
    }
}
