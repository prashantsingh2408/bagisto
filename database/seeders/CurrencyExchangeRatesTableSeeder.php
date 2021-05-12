<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyExchangeRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currency_exchange_rates')->delete();
        
        
        
    }
}