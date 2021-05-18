<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogRuleChannelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_rule_channels')->delete();
        
        \DB::table('catalog_rule_channels')->insert(array (
            0 => 
            array (
                'catalog_rule_id' => 1,
                'channel_id' => 1,
            ),
        ));
        
        
    }
}