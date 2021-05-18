<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductUpSellsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_up_sells')->delete();
        
        
        
    }
}