<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'       => 1,
            'username' => 'secret',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'id'       => 2,
            'username' => 'user',
            'password' => bcrypt('user')
        ]);
    }
}
