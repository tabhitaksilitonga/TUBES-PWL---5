<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollectionItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collection_items')->delete();
        
        \DB::table('collection_items')->insert(array (
            0 => 
            array (
                'collection_id' => 1,
                'shot_id' => 808,
                'added_at' => '2026-05-21 15:32:03',
            ),
            1 => 
            array (
                'collection_id' => 1,
                'shot_id' => 1205,
                'added_at' => '2026-05-21 16:10:40',
            ),
            2 => 
            array (
                'collection_id' => 1,
                'shot_id' => 549,
                'added_at' => '2026-05-21 17:50:45',
            ),
        ));
        
        
    }
}