<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purses', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            //$table->foreign('character_id')->references('id')->on('characters');
            $table->string('name');
            $table->integer('dukaten');
            $table->integer('silber');
            $table->integer('heller');
            $table->integer('kreuzer');

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
        Schema::dropIfExists('purses');
    }
}
