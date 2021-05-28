<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder{
    public function run(){
        DB::table('items')->delete();

        $items = array(
            array(
                'owner_id' => 1,
                'name' => 'Finish watching tutorial',
                'done' => false,
            ),
            array(
                'owner_id' => 1,
                'name' => 'Try to understand the tutorial',
                'done' => true,
            ),
            array(
                'owner_id' => 1,
                'name' => 'Tried murdering chicken',
                'done' => false,
            )
        );

        DB::table('items')->insert($items);
    }
}
