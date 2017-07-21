<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_weapon', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            //$table->foreign('character_id')->references('id')->on('characters');
            $table->integer('weapon_id');
            //$table->foreign('weapon_id')->references('id')->on('weapons');

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
        Schema::dropIfExists('character_weapon');
    }
}
