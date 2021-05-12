<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('channels')->delete();
        
        \DB::table('channels')->insert(array (
            0 => 
            array (
                'allowed_ips' => '',
                'base_currency_id' => 1,
                'code' => 'default',
                'created_at' => NULL,
                'default_locale_id' => 1,
                'favicon' => NULL,
                'hostname' => 'http://localhost',
                'id' => 1,
                'is_maintenance_on' => 0,
                'logo' => NULL,
                'root_category_id' => 1,
                'theme' => 'velocity',
                'timezone' => NULL,
                'updated_at' => '2021-03-23 17:51:08',
            ),
        ));
        
        
    }
}