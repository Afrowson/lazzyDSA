<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_talent', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('character_id')->unsigned()->index();
            //$table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('talent_id')->unsigned()->index();
            //$table->foreign('talent_id')->references('id')->on('talents')->onDelete('cascade');
            $table->integer('value');

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
        Schema::dropIfExists('character_talent');
    }
}
