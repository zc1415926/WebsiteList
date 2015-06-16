<?php

use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagories')->insert([
            'id'            => 1,
            'user_id'       => 1,
            'catagory_name' => '3D'
        ]);

        DB::table('catagories')->insert([
            'id'            => 2,
            'user_id'       => 1,
            'catagory_name' => 'Program'
        ]);

        DB::table('catagories')->insert([
            'id'            => 3,
            'user_id'       => 2,
            'catagory_name' => 'Design'
        ]);

        DB::table('catagories')->insert([
            'id'            => 4,
            'user_id'       => 2,
            'catagory_name' => 'Download'
        ]);
    }
}
