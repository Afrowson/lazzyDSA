<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterShieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_shield', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            //$table->foreign('character_id')->references('id')->on('characters');
            $table->integer('shield_id');
            //$table->foreign('shield_id')->references('id')->on('shields');

            $table->string('keys');
            $table->string('modifiers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_shield');

    }

}
