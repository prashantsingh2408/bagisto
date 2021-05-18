<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'code' => 'USD',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'US Dollar',
                'symbol' => '$',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code' => 'EUR',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Euro',
                'symbol' => '€',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}