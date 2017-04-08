<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoryitems', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('inventory_id')->unsigned();
            $table->foreign('inventory_id')->references('id')->on('inventories');

            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');

            $table->integer('ammount');

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
        Schema::dropIfExists('inventoryitems');
    }
}
