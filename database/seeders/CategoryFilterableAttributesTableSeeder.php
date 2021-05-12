<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFilterableAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_filterable_attributes')->delete();
        
        \DB::table('category_filterable_attributes')->insert(array (
            0 => 
            array (
                'attribute_id' => 11,
                'category_id' => 2,
            ),
            1 => 
            array (
                'attribute_id' => 11,
                'category_id' => 3,
            ),
            2 => 
            array (
                'attribute_id' => 11,
                'category_id' => 4,
            ),
            3 => 
            array (
                'attribute_id' => 11,
                'category_id' => 5,
            ),
            4 => 
            array (
                'attribute_id' => 11,
                'category_id' => 6,
            ),
            5 => 
            array (
                'attribute_id' => 11,
                'category_id' => 7,
            ),
            6 => 
            array (
                'attribute_id' => 11,
                'category_id' => 8,
            ),
            7 => 
            array (
                'attribute_id' => 11,
                'category_id' => 9,
            ),
            8 => 
            array (
                'attribute_id' => 11,
                'category_id' => 10,
            ),
            9 => 
            array (
                'attribute_id' => 11,
                'category_id' => 11,
            ),
            10 => 
            array (
                'attribute_id' => 11,
                'category_id' => 12,
            ),
        ));
        
        
    }
}