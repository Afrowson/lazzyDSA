<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterLetteringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_lettering', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('character_id');
            //$table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->integer('lettering_id')->unsigned()->index();
            //$table->foreign('lettering_id')->references('id')->on('letterings')->onDelete('cascade');
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
        Schema::dropIfExists('character_lettering');
    }
}
