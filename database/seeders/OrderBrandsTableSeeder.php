<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_brands')->delete();
        
        \DB::table('order_brands')->insert(array (
            0 => 
            array (
                'brand' => NULL,
                'created_at' => '2021-03-23 11:27:09',
                'id' => 1,
                'order_id' => 1,
                'order_item_id' => 1,
                'product_id' => 1,
                'updated_at' => '2021-03-23 11:27:09',
            ),
        ));
        
        
    }
}