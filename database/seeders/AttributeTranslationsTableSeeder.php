<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_translations')->delete();
        
        \DB::table('attribute_translations')->insert(array (
            0 => 
            array (
                'attribute_id' => 1,
                'id' => 1,
                'locale' => 'en',
                'name' => 'SKU',
            ),
            1 => 
            array (
                'attribute_id' => 2,
                'id' => 2,
                'locale' => 'en',
                'name' => 'Name',
            ),
            2 => 
            array (
                'attribute_id' => 3,
                'id' => 3,
                'locale' => 'en',
                'name' => 'URL Key',
            ),
            3 => 
            array (
                'attribute_id' => 4,
                'id' => 4,
                'locale' => 'en',
                'name' => 'Tax Category',
            ),
            4 => 
            array (
                'attribute_id' => 5,
                'id' => 5,
                'locale' => 'en',
                'name' => 'New',
            ),
            5 => 
            array (
                'attribute_id' => 6,
                'id' => 6,
                'locale' => 'en',
                'name' => 'Featured',
            ),
            6 => 
            array (
                'attribute_id' => 7,
                'id' => 7,
                'locale' => 'en',
                'name' => 'Visible Individually',
            ),
            7 => 
            array (
                'attribute_id' => 8,
                'id' => 8,
                'locale' => 'en',
                'name' => 'Status',
            ),
            8 => 
            array (
                'attribute_id' => 9,
                'id' => 9,
                'locale' => 'en',
                'name' => 'Short Description',
            ),
            9 => 
            array (
                'attribute_id' => 10,
                'id' => 10,
                'locale' => 'en',
                'name' => 'Description',
            ),
            10 => 
            array (
                'attribute_id' => 11,
                'id' => 11,
                'locale' => 'en',
                'name' => 'Price',
            ),
            11 => 
            array (
                'attribute_id' => 12,
                'id' => 12,
                'locale' => 'en',
                'name' => 'Cost',
            ),
            12 => 
            array (
                'attribute_id' => 13,
                'id' => 13,
                'locale' => 'en',
                'name' => 'Special Price',
            ),
            13 => 
            array (
                'attribute_id' => 14,
                'id' => 14,
                'locale' => 'en',
                'name' => 'Special Price From',
            ),
            14 => 
            array (
                'attribute_id' => 15,
                'id' => 15,
                'locale' => 'en',
                'name' => 'Special Price To',
            ),
            15 => 
            array (
                'attribute_id' => 16,
                'id' => 16,
                'locale' => 'en',
                'name' => 'Meta Description',
            ),
            16 => 
            array (
                'attribute_id' => 17,
                'id' => 17,
                'locale' => 'en',
                'name' => 'Meta Keywords',
            ),
            17 => 
            array (
                'attribute_id' => 18,
                'id' => 18,
                'locale' => 'en',
                'name' => 'Meta Description',
            ),
            18 => 
            array (
                'attribute_id' => 19,
                'id' => 19,
                'locale' => 'en',
                'name' => 'Width',
            ),
            19 => 
            array (
                'attribute_id' => 20,
                'id' => 20,
                'locale' => 'en',
                'name' => 'Height',
            ),
            20 => 
            array (
                'attribute_id' => 21,
                'id' => 21,
                'locale' => 'en',
                'name' => 'Depth',
            ),
            21 => 
            array (
                'attribute_id' => 22,
                'id' => 22,
                'locale' => 'en',
                'name' => 'Weight',
            ),
            22 => 
            array (
                'attribute_id' => 23,
                'id' => 23,
                'locale' => 'en',
                'name' => 'Color',
            ),
            23 => 
            array (
                'attribute_id' => 24,
                'id' => 24,
                'locale' => 'en',
                'name' => 'Size',
            ),
            24 => 
            array (
                'attribute_id' => 25,
                'id' => 25,
                'locale' => 'en',
                'name' => 'Brand',
            ),
            25 => 
            array (
                'attribute_id' => 26,
                'id' => 26,
                'locale' => 'en',
                'name' => 'Allow Guest Checkout',
            ),
            26 => 
            array (
                'attribute_id' => 27,
                'id' => 27,
                'locale' => 'en',
                'name' => 'Product Number',
            ),
        ));
        
        
    }
}