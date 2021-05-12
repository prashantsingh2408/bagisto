<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('channel_currencies')->delete();
        
        \DB::table('channel_currencies')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'currency_id' => 1,
            ),
        ));
        
        
    }
}