<?php

use Illuminate\Database\Seeder;

class ListItemOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_items_order')->insert([
            //'catagory_id'       => 1,
            'list_item_id'      => 1,
            'list_item_order'   => 1
        ]);

        DB::table('list_items_order')->insert([
            //'catagory_id'       => 2,
            'list_item_id'      => 2,
            'list_item_order'   => 1
        ]);

        DB::table('list_items_order')->insert([
            //'catagory_id'       => 3,
            'list_item_id'      => 3,
            'list_item_order'   => 1
        ]);

        DB::table('list_items_order')->insert([
            //'catagory_id'       => 4,
            'list_item_id'      => 4,
            'list_item_order'   => 2
        ]);

        DB::table('list_items_order')->insert([
            //'catagory_id'       => 4,
            'list_item_id'      => 5,
            'list_item_order'   => 1
        ]);
    }
}
