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
            $table->string('race');
            $table->string('profession')->nullable();;
            $table->integer('gender');
            $table->integer('size');
            $table->integer('wight');
            $table->date('date_of_birth')->nullable();;

            $table->integer('mut');
            $table->integer('klugheit');
            $table->integer('intuition');
            $table->integer('charisma');
            $table->integer('finger_fertigkeit');
            $table->integer('geschicklichkeit');
            $table->integer('konstitution');
            $table->integer('körperkraft');

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
