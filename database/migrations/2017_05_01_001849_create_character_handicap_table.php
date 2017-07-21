<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterHandicapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_handicap', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            //$table->foreigen('character_id')->references('id')->on('characters');
            $table->integer('handicap_id')->index();
            //$table->foreigen('handicap_id')->references('id')->on('handicaps');
            $table->integer('value')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('character_handicap');
    }
}
