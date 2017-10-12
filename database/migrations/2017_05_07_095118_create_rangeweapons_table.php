<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRangeweaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rangeweapons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('rules')->nullable();
            $table->integer('fightingtalent_id');
            //  $table->foreign('fightingtalent_id')->references('id')->on('fightingtalents');
            $table->integer('reload_time');
            $table->string('munition_type')->nullable();
            $table->integer('dice');
            $table->integer('bonus_dmg');
            $table->decimal('weight')->nullable();
            $table->integer('range_one');
            $table->integer('range_two');
            $table->integer('range_three');

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
        Schema::dropIfExists('rangeweapons');
    }
}
