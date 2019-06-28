<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumeroDeVisitasTable extends Migration  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numero_de_visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_visitante');
            //$table->derb
            $table->timestamps();
        });
        /*
        $command = "
            CREATE OR REPLACE PROCEDURE num_visitas(id IN NUMBER) AS
            BEGIN
                INSERT INTO 
            END;
        ";*/

        //DB::connection()->getPdo()->exec($command);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numero_de_visitas');
    }
}
