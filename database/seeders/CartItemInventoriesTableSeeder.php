<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartItemInventoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_item_inventories')->delete();
        
        
        
    }
}