<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterFightingtalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_fightingtalent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->integer('character_id');
            //$table->foreign('character_id')->references('id')->on('charaacters')->onDelete('cascade');
            $table->integer('fightingtalent_id');
            //$table->foreign('fightingtalent_id')->references('id')->on('fightingtalents')->onDelete('cascade');

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
        Schema::dropIfExists('character_fightingtalent');
    }
}
