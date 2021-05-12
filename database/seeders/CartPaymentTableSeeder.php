<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartPaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_payment')->delete();
        
        \DB::table('cart_payment')->insert(array (
            0 => 
            array (
                'cart_id' => 1,
                'created_at' => '2021-03-23 11:26:56',
                'id' => 1,
                'method' => 'cashondelivery',
                'method_title' => NULL,
                'updated_at' => '2021-03-23 11:26:56',
            ),
        ));
        
        
    }
}