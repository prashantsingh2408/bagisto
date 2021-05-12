<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'category_id' => 2,
                'product_id' => 1,
            ),
            1 => 
            array (
                'category_id' => 3,
                'product_id' => 1,
            ),
            2 => 
            array (
                'category_id' => 4,
                'product_id' => 1,
            ),
            3 => 
            array (
                'category_id' => 5,
                'product_id' => 1,
            ),
            4 => 
            array (
                'category_id' => 6,
                'product_id' => 1,
            ),
            5 => 
            array (
                'category_id' => 7,
                'product_id' => 1,
            ),
            6 => 
            array (
                'category_id' => 8,
                'product_id' => 1,
            ),
            7 => 
            array (
                'category_id' => 9,
                'product_id' => 1,
            ),
            8 => 
            array (
                'category_id' => 10,
                'product_id' => 1,
            ),
            9 => 
            array (
                'category_id' => 11,
                'product_id' => 1,
            ),
            10 => 
            array (
                'category_id' => 12,
                'product_id' => 4,
            ),
            11 => 
            array (
                'category_id' => 1,
                'product_id' => 4,
            ),
            12 => 
            array (
                'category_id' => 6,
                'product_id' => 5,
            ),
        ));
        
        
    }
}