<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarketingEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marketing_events')->delete();
        
        \DB::table('marketing_events')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'date' => NULL,
                'description' => 'Birthday',
                'id' => 1,
                'name' => 'Birthday',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}