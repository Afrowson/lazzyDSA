<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterSpecialmagictalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_specialmagictalent', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            $table->integer('specialmagictalent_id');
            //$table->foreign('charaacter_id')->references('id')->on('characters');
            //$table->foreign('specialmagictalent_id')->references('id')->on('specialmagictalent');
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
        Schema::dropIfExists('character_specialmagictalent');
    }
}
