<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterRangeweaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_rangeweapon', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            //$table->foreign('character_id')->references('id')->on('characters');
            $table->integer('rangeweapon_id');
            //$table->foreign('rangeweapon_id')->references('id')->on('rangeweapons');

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
        Schema::dropIfExists('character_rangeweapon');
    }
}
