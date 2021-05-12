<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_options')->delete();
        
        \DB::table('attribute_options')->insert(array (
            0 => 
            array (
                'admin_name' => 'Red',
                'attribute_id' => 23,
                'id' => 1,
                'sort_order' => 1,
                'swatch_value' => NULL,
            ),
            1 => 
            array (
                'admin_name' => 'Green',
                'attribute_id' => 23,
                'id' => 2,
                'sort_order' => 2,
                'swatch_value' => NULL,
            ),
            2 => 
            array (
                'admin_name' => 'Yellow',
                'attribute_id' => 23,
                'id' => 3,
                'sort_order' => 3,
                'swatch_value' => NULL,
            ),
            3 => 
            array (
                'admin_name' => 'Black',
                'attribute_id' => 23,
                'id' => 4,
                'sort_order' => 4,
                'swatch_value' => NULL,
            ),
            4 => 
            array (
                'admin_name' => 'White',
                'attribute_id' => 23,
                'id' => 5,
                'sort_order' => 5,
                'swatch_value' => NULL,
            ),
            5 => 
            array (
                'admin_name' => 'S',
                'attribute_id' => 24,
                'id' => 6,
                'sort_order' => 1,
                'swatch_value' => NULL,
            ),
            6 => 
            array (
                'admin_name' => 'M',
                'attribute_id' => 24,
                'id' => 7,
                'sort_order' => 2,
                'swatch_value' => NULL,
            ),
            7 => 
            array (
                'admin_name' => 'L',
                'attribute_id' => 24,
                'id' => 8,
                'sort_order' => 3,
                'swatch_value' => NULL,
            ),
            8 => 
            array (
                'admin_name' => 'XL',
                'attribute_id' => 24,
                'id' => 9,
                'sort_order' => 4,
                'swatch_value' => NULL,
            ),
        ));
        
        
    }
}