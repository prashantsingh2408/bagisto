<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_categories')->delete();
        
        
        
    }
}