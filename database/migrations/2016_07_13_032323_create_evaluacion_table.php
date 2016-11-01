<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('evaluacion')->nullable();
            $table->string('Profesor_id');
            $table->string('modulo1');
            $table->string('modulo2');
            $table->string('modulo3');
            $table->string('modulo4');
            $table->string('modulo5');
            $table->string('modulo6');
            $table->string('modulo7');
            $table->string('carrera');
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
        Schema::drop('evaluacion');
    }
}
