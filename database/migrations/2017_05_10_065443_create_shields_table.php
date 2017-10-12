<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('rules')->nullable();
            $table->integer('fightingtalent_id');
//  $table->foreign('fightingtalent_id')->references('id')->on('fightingtalents');
            $table->string('skill')->nullable();
            $table->integer('ss')->nullable();
            $table->integer('dice');
            $table->integer('bonus_dmg');
            $table->integer('at_mod')->nullable();
            $table->integer('pa_mod')->nullable();
            $table->decimal('weight')->nullable();
            $table->integer('reach')->nullable();
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
        Schema::dropIfExists('shields');
    }
}
