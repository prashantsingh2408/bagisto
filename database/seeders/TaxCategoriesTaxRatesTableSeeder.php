<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxCategoriesTaxRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_categories_tax_rates')->delete();
        
        
        
    }
}