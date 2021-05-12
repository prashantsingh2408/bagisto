<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeOptionTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_option_translations')->delete();
        
        \DB::table('attribute_option_translations')->insert(array (
            0 => 
            array (
                'attribute_option_id' => 1,
                'id' => 1,
                'label' => 'Red',
                'locale' => 'en',
            ),
            1 => 
            array (
                'attribute_option_id' => 2,
                'id' => 2,
                'label' => 'Green',
                'locale' => 'en',
            ),
            2 => 
            array (
                'attribute_option_id' => 3,
                'id' => 3,
                'label' => 'Yellow',
                'locale' => 'en',
            ),
            3 => 
            array (
                'attribute_option_id' => 4,
                'id' => 4,
                'label' => 'Black',
                'locale' => 'en',
            ),
            4 => 
            array (
                'attribute_option_id' => 5,
                'id' => 5,
                'label' => 'White',
                'locale' => 'en',
            ),
            5 => 
            array (
                'attribute_option_id' => 6,
                'id' => 6,
                'label' => 'S',
                'locale' => 'en',
            ),
            6 => 
            array (
                'attribute_option_id' => 7,
                'id' => 7,
                'label' => 'M',
                'locale' => 'en',
            ),
            7 => 
            array (
                'attribute_option_id' => 8,
                'id' => 8,
                'label' => 'L',
                'locale' => 'en',
            ),
            8 => 
            array (
                'attribute_option_id' => 9,
                'id' => 9,
                'label' => 'XL',
                'locale' => 'en',
            ),
        ));
        
        
    }
}