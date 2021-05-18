<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCrossSellsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_cross_sells')->delete();
        
        
        
    }
}