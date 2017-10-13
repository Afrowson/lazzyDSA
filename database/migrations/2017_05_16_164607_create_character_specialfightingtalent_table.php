<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterSpecialfightingtalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_Specialfightingtalent', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            $table->integer('Specialfightingtalent_id');
            //$table->foreign('charaacter_id')->references('id')->on('characters');
            //$table->foreign('Specialfightingtalent_id')->references('id')->on('Specialfightingtalents');
            $table->string('data')->nullable();
            $table->string('value')->nullable();
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
        Schema::dropIfExists('character_Specialfightingtalent');
    }
}
