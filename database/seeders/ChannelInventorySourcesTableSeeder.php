<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelInventorySourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('channel_inventory_sources')->delete();
        
        \DB::table('channel_inventory_sources')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'inventory_source_id' => 1,
            ),
        ));
        
        
    }
}