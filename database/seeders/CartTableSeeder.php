<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart')->delete();
        
        \DB::table('cart')->insert(array (
            0 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '20.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 11:25:01',
                'customer_email' => 'pegalogics@gmail.com',
                'customer_first_name' => 'pega',
                'customer_id' => NULL,
                'customer_last_name' => 'logics',
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '20.0000',
                'id' => 1,
                'is_active' => 0,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => 'flatrate_flatrate',
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 11:27:09',
            ),
            1 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 12:02:30',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 2,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 12:02:31',
            ),
            2 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 12:28:38',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 3,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 12:28:38',
            ),
            3 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 14:02:25',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 4,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 14:02:39',
            ),
            4 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 15:13:28',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 5,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 15:13:33',
            ),
            5 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 20:30:20',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 6,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-03-23 21:09:09',
            ),
            6 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '36.0000',
                'base_sub_total' => '36.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-03-25 15:01:40',
                'customer_email' => 'prashantsingh2408@gmail.com',
                'customer_first_name' => 'prashant',
                'customer_id' => 1,
                'customer_last_name' => 'singh',
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '36.0000',
                'id' => 7,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 0,
                'items_count' => 2,
                'items_qty' => '4.0000',
                'shipping_method' => NULL,
                'sub_total' => '36.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-04-03 15:13:59',
            ),
            7 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-04-07 17:17:58',
                'customer_email' => 'prashantsingh2408cloud@gmail.com',
                'customer_first_name' => 'prasahant999',
                'customer_id' => 22,
                'customer_last_name' => 'singh999',
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 8,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 0,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-04-07 17:17:58',
            ),
            8 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-04-07 17:28:26',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 9,
                'is_active' => 1,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-04-07 17:28:26',
            ),
            9 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_grand_total' => '10.0000',
                'base_sub_total' => '10.0000',
                'base_tax_total' => '0.0000',
                'cart_currency_code' => 'USD',
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'checkout_method' => NULL,
                'conversion_time' => NULL,
                'coupon_code' => NULL,
                'created_at' => '2021-04-07 17:31:45',
                'customer_email' => NULL,
                'customer_first_name' => NULL,
                'customer_id' => NULL,
                'customer_last_name' => NULL,
                'discount_amount' => '0.0000',
                'exchange_rate' => NULL,
                'global_currency_code' => 'USD',
                'grand_total' => '10.0000',
                'id' => 10,
                'is_active' => 0,
                'is_gift' => 0,
                'is_guest' => 1,
                'items_count' => 1,
                'items_qty' => '1.0000',
                'shipping_method' => NULL,
                'sub_total' => '10.0000',
                'tax_total' => '0.0000',
                'updated_at' => '2021-04-07 17:34:27',
            ),
        ));
        
        
    }
}