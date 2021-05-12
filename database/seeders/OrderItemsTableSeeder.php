<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'additional' => '{"_token": "gbtIu2pobdLIbusFG9hwyAjzltXs7zw5wit4ZYPM", "locale": "en", "quantity": 1, "product_id": "1"}',
                'amount_refunded' => '0.0000',
                'base_amount_refunded' => '0.0000',
                'base_discount_amount' => '0.0000',
                'base_discount_invoiced' => '0.0000',
                'base_discount_refunded' => '0.0000',
                'base_price' => '10.0000',
                'base_tax_amount' => '0.0000',
                'base_tax_amount_invoiced' => '0.0000',
                'base_tax_amount_refunded' => '0.0000',
                'base_total' => '10.0000',
                'base_total_invoiced' => '0.0000',
                'coupon_code' => NULL,
                'created_at' => '2021-03-23 11:27:08',
                'discount_amount' => '0.0000',
                'discount_invoiced' => '0.0000',
                'discount_percent' => '0.0000',
                'discount_refunded' => '0.0000',
                'id' => 1,
                'name' => 'product1',
                'order_id' => 1,
                'parent_id' => NULL,
                'price' => '10.0000',
                'product_id' => 1,
                'product_type' => 'Webkul\\Product\\Models\\Product',
                'qty_canceled' => 0,
                'qty_invoiced' => 0,
                'qty_ordered' => 1,
                'qty_refunded' => 0,
                'qty_shipped' => 0,
                'sku' => '1',
                'tax_amount' => '0.0000',
                'tax_amount_invoiced' => '0.0000',
                'tax_amount_refunded' => '0.0000',
                'tax_percent' => '0.0000',
                'total' => '10.0000',
                'total_invoiced' => '0.0000',
                'total_weight' => '20.0000',
                'type' => 'simple',
                'updated_at' => '2021-03-23 11:27:08',
                'weight' => '20.0000',
            ),
        ));
        
        
    }
}