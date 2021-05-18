<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_rates')->delete();
        
        
        
    }
}