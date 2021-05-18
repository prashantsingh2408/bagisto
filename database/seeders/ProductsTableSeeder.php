<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-03-22 10:58:07',
                'id' => 1,
                'parent_id' => NULL,
                'sku' => '1',
                'type' => 'simple',
                'updated_at' => '2021-03-22 10:58:07',
            ),
            1 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-03-22 16:06:46',
                'id' => 2,
                'parent_id' => NULL,
                'sku' => '2',
                'type' => 'simple',
                'updated_at' => '2021-03-22 16:06:46',
            ),
            2 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-03-23 17:25:01',
                'id' => 3,
                'parent_id' => NULL,
                'sku' => '3',
                'type' => 'simple',
                'updated_at' => '2021-03-23 17:25:01',
            ),
            3 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-03-25 15:07:05',
                'id' => 4,
                'parent_id' => NULL,
                'sku' => '88',
                'type' => 'simple',
                'updated_at' => '2021-03-25 15:07:05',
            ),
            4 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-03-25 15:38:19',
                'id' => 5,
                'parent_id' => NULL,
                'sku' => '89',
                'type' => 'simple',
                'updated_at' => '2021-03-25 15:38:19',
            ),
            5 => 
            array (
                'attribute_family_id' => 1,
                'created_at' => '2021-04-03 12:48:08',
                'id' => 6,
                'parent_id' => NULL,
                'sku' => 'cocunut',
                'type' => 'simple',
                'updated_at' => '2021-04-03 12:48:08',
            ),
        ));
        
        
    }
}