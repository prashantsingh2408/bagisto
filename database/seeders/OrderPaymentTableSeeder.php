<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderPaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_payment')->delete();
        
        \DB::table('order_payment')->insert(array (
            0 => 
            array (
                'additional' => NULL,
                'created_at' => '2021-03-23 11:27:08',
                'id' => 1,
                'method' => 'cashondelivery',
                'method_title' => NULL,
                'order_id' => 1,
                'updated_at' => '2021-03-23 11:27:08',
            ),
        ));
        
        
    }
}