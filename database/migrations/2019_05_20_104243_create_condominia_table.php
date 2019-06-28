<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('num_rented_houses');
            $table->string('phone');
            $table->text('address');
            $table->string('postal');
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
        Schema::dropIfExists('condominia');
    }
}
