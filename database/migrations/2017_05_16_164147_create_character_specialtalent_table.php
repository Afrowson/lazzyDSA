<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterSpecialtalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_specialtalent', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            $table->integer('specialtalent_id');
            //$table->foreign('charaacter_id')->references('id')->on('characters');
            //$table->foreign('specialtalent_id')->references('id')->on('specialtalent');
            $table->timestamps();
            $table->string('data')->nullable();
            $table->string('value')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_specialtalent');
    }
}
