<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductOrderedInventoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_ordered_inventories')->delete();
        
        \DB::table('product_ordered_inventories')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'id' => 1,
                'product_id' => 1,
                'qty' => 1,
            ),
        ));
        
        
    }
}