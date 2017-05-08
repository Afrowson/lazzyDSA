<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armor_character', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            //$table->foreign('character_id')->references('id')->on('characters');
            $table->integer('armor_id');
            //$table->foreign('armor_id')->references('id')->on('armors');

            $table->string('keys');
            $table->string('modifiers');

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
        Schema::dropIfExists('armor_character');
    }
}
