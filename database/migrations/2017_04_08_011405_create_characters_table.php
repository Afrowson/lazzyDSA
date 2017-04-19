<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('race')->nullable();
            $table->string('profession')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('size')->nullable();
            $table->integer('wight')->nullable();
            $table->integer('age')->nullable();

            $table->integer('MU');
            $table->integer('KL');
            $table->integer('IN');
            $table->integer('CH');
            $table->integer('FF');
            $table->integer('GE');
            $table->integer('KO');
            $table->integer('KK');

            $table->integer('ap_total');
            $table->integer('ap_spend')->nullable();

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
        Schema::dropIfExists('characters');
    }
}
