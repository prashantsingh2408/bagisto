<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelLocalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('channel_locales')->delete();
        
        \DB::table('channel_locales')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'locale_id' => 1,
            ),
        ));
        
        
    }
}