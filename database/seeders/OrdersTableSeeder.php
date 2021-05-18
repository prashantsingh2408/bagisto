<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'applied_cart_rule_ids' => '',
                'base_currency_code' => 'USD',
                'base_discount_amount' => '0.0000',
                'base_discount_invoiced' => '0.0000',
                'base_discount_refunded' => '0.0000',
                'base_grand_total' => '20.0000',
                'base_grand_total_invoiced' => '0.0000',
                'base_grand_total_refunded' => '0.0000',
                'base_shipping_amount' => '10.0000',
                'base_shipping_discount_amount' => '0.0000',
                'base_shipping_invoiced' => '0.0000',
                'base_shipping_refunded' => '0.0000',
                'base_sub_total' => '10.0000',
                'base_sub_total_invoiced' => '0.0000',
                'base_sub_total_refunded' => '0.0000',
                'base_tax_amount' => '0.0000',
                'base_tax_amount_invoiced' => '0.0000',
                'base_tax_amount_refunded' => '0.0000',
                'cart_id' => 1,
                'channel_currency_code' => 'USD',
                'channel_id' => 1,
                'channel_name' => 'Default',
                'channel_type' => 'Webkul\\Core\\Models\\Channel',
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 11:27:08',
                'customer_company_name' => NULL,
                'customer_email' => 'pegalogics@gmail.com',
                'customer_first_name' => 'pega',
                'customer_id' => NULL,
                'customer_last_name' => 'logics',
                'customer_type' => NULL,
                'customer_vat_id' => NULL,
                'discount_amount' => '0.0000',
                'discount_invoiced' => '0.0000',
                'discount_percent' => '0.0000',
                'discount_refunded' => '0.0000',
                'grand_total' => '20.0000',
                'grand_total_invoiced' => '0.0000',
                'grand_total_refunded' => '0.0000',
                'id' => 1,
                'increment_id' => '1',
                'is_gift' => 0,
                'is_guest' => 1,
                'order_currency_code' => 'USD',
                'shipping_amount' => '10.0000',
                'shipping_description' => 'Flat Rate Shipping',
                'shipping_discount_amount' => '0.0000',
                'shipping_invoiced' => '0.0000',
                'shipping_method' => 'flatrate_flatrate',
                'shipping_refunded' => '0.0000',
                'shipping_title' => 'Flat Rate - Flat Rate',
                'status' => 'pending',
                'sub_total' => '10.0000',
                'sub_total_invoiced' => '0.0000',
                'sub_total_refunded' => '0.0000',
                'tax_amount' => '0.0000',
                'tax_amount_invoiced' => '0.0000',
                'tax_amount_refunded' => '0.0000',
                'total_item_count' => 1,
                'total_qty_ordered' => 1,
                'updated_at' => '2021-03-23 11:27:08',
            ),
        ));
        
        
    }
}