<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductInventoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_inventories')->delete();
        
        \DB::table('product_inventories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'inventory_source_id' => 1,
                'product_id' => 1,
                'qty' => 10,
                'vendor_id' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'inventory_source_id' => 1,
                'product_id' => 3,
                'qty' => 50,
                'vendor_id' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'inventory_source_id' => 1,
                'product_id' => 4,
                'qty' => 0,
                'vendor_id' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'inventory_source_id' => 1,
                'product_id' => 5,
                'qty' => 1,
                'vendor_id' => 0,
            ),
        ));
        
        
    }
}