<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficeCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefice_character', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->index();
            //$table->foreigen('character_id')->references('id')->on('characters');
            $table->integer('benefice_id')->index();
            //$table->foreigen('benefice_id')->references('id')->on('benefices');
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
        Schema::dropIfExists('benefice_character');
    }
}
