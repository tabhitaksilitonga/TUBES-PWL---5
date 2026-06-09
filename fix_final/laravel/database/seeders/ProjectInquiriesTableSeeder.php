<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectInquiriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_inquiries')->delete();
        
        \DB::table('project_inquiries')->insert(array (
            0 => 
            array (
                'id' => 5,
                'user_id' => 105,
                'shots_id' => 2323,
                'project_details' => 'tes get in touch tes get in touch tes get in touch tes get in touch tes get in touch tes get in touch',
                'target_date' => '1 month',
                'project_budget' => 13000000,
                'recommend_budget' => 0,
                'contact_person' => '081275654398',
                'created_at' => '2026-06-09 20:11:23',
                'updated_at' => '2026-06-09 20:11:23',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 105,
                'shots_id' => 2324,
                'project_details' => 'test lagi kedua test lagi kedua test lagi kedua test lagi kedua test lagi kedua test lagi kedua test lagi kedua test lagi kedua',
                'target_date' => '1-2 weeks',
                'project_budget' => 31000000,
                'recommend_budget' => 0,
                'contact_person' => 'sitinaifahbatubara@gmail.com',
                'created_at' => '2026-06-09 20:12:13',
                'updated_at' => '2026-06-09 20:12:13',
            ),
        ));
        
        
    }
}