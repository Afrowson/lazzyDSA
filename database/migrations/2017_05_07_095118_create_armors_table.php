<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('rules')->nullable();
            $table->integer('RS');
            $table->integer('BE');
            $table->decimal('weight')->nullable();

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
        Schema::dropIfExists('armors');
    }
}
