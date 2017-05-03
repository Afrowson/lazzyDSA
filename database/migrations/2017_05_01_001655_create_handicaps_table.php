<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandicapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handicaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('decription')->nullable();
            $table->text('rules')->nullable();
            $table->integer('level')->nullable();
            $table->integer('ap_cost')->nullable();
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
        Schema::dropIfExists('handicaps');
    }
}
