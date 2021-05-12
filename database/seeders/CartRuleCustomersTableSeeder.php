<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartRuleCustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_rule_customers')->delete();
        
        
        
    }
}