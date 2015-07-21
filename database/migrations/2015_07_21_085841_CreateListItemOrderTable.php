<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_items_order', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id', false, true);
            //$table->integer('catagory_id', false, true);
            $table->integer('list_item_id', false, true);
            $table->integer('list_item_order', false, true);
            $table->timestamps();

            /*$table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('catagory_id')
                ->references('id')
                ->on('catagories')
                ->onDelete('cascade');*/

            $table->foreign('list_item_id')
                ->references('id')
                ->on('list_items')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list_items_order');
    }
}
