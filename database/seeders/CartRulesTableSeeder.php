<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_rules')->delete();
        
        
        
    }
}