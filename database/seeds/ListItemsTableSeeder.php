<?php

use Illuminate\Database\Seeder;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_items')->insert([
            'id'               => 1,
            'catagory_id'      => 1,
            'list_item_name'   => '人人素材',
            'list_item_url'    => 'http://www.rr-sc.com/'
        ]);

        DB::table('list_items')->insert([
            'id'               => 2,
            'catagory_id'      => 2,
            'list_item_name'   => '开源中国',
            'list_item_url'    => 'http://www.oschina.net/'
        ]);

        DB::table('list_items')->insert([
            'id'               => 3,
            'catagory_id'      => 3,
            'list_item_name'   => 'ZCOOL站酷',
            'list_item_url'    => 'http://www.zcool.com.cn/'
        ]);

        DB::table('list_items')->insert([
            'id'               => 4,
            'catagory_id'      => 4,
            'list_item_name'   => 'kickasstorrents',
            'list_item_url'    => 'http://kat.cr/'
        ]);

        DB::table('list_items')->insert([
            'id'               => 5,
            'catagory_id'      => 4,
            'list_item_name'   => 'isohunt',
            'list_item_url'    => 'http://isohunt.to/'
        ]);
    }
}
