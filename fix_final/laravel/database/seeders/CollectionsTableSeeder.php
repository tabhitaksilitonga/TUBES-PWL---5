<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collections')->delete();
        
        \DB::table('collections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 103,
                'name' => 'Saved',
                'description' => 'My saved shots',
                'created_at' => '2026-05-21 15:32:03',
                'updated_at' => '2026-05-21 15:32:03',
            ),
        ));
        
        
    }
}