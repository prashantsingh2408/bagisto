<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartShippingRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart_shipping_rates')->delete();
        
        \DB::table('cart_shipping_rates')->insert(array (
            0 => 
            array (
                'base_discount_amount' => '0.0000',
                'base_price' => 10.0,
                'carrier' => 'flatrate',
                'carrier_title' => 'Flat Rate',
                'cart_address_id' => 2,
                'created_at' => '2021-03-23 11:26:44',
                'discount_amount' => '0.0000',
                'id' => 1,
                'is_calculate_tax' => 1,
                'method' => 'flatrate_flatrate',
                'method_description' => 'Flat Rate Shipping',
                'method_title' => 'Flat Rate',
                'price' => 10.0,
                'updated_at' => '2021-03-23 11:27:07',
            ),
            1 => 
            array (
                'base_discount_amount' => '0.0000',
                'base_price' => 0.0,
                'carrier' => 'free',
                'carrier_title' => 'Free Shipping',
                'cart_address_id' => 2,
                'created_at' => '2021-03-23 11:26:44',
                'discount_amount' => '0.0000',
                'id' => 2,
                'is_calculate_tax' => 1,
                'method' => 'free_free',
                'method_description' => 'Free Shipping',
                'method_title' => 'Free Shipping',
                'price' => 0.0,
                'updated_at' => '2021-03-23 11:26:44',
            ),
        ));
        
        
    }
}