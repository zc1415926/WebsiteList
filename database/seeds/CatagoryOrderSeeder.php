<?php

use Illuminate\Database\Seeder;

class CatagoryOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagory_order')->insert([
            'catagory_id'   => 1,
            'user_id'       => 1,
            'catagory_order' => 2
        ]);

        DB::table('catagory_order')->insert([
            'catagory_id'   => 2,
            'user_id'       => 1,
            'catagory_order' => 1
        ]);

        DB::table('catagory_order')->insert([
            'catagory_id'   => 3,
            'user_id'       => 2,
            'catagory_order' => 2
        ]);

        DB::table('catagory_order')->insert([
            'catagory_id'   => 4,
            'user_id'       => 2,
            'catagory_order' => 1
        ]);
    }
}
