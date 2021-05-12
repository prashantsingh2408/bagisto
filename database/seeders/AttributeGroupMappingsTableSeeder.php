<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeGroupMappingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_group_mappings')->delete();
        
        \DB::table('attribute_group_mappings')->insert(array (
            0 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 1,
                'position' => 1,
            ),
            1 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 2,
                'position' => 3,
            ),
            2 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 3,
                'position' => 4,
            ),
            3 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 4,
                'position' => 5,
            ),
            4 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 5,
                'position' => 6,
            ),
            5 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 6,
                'position' => 7,
            ),
            6 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 7,
                'position' => 8,
            ),
            7 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 8,
                'position' => 10,
            ),
            8 => 
            array (
                'attribute_group_id' => 2,
                'attribute_id' => 9,
                'position' => 1,
            ),
            9 => 
            array (
                'attribute_group_id' => 2,
                'attribute_id' => 10,
                'position' => 2,
            ),
            10 => 
            array (
                'attribute_group_id' => 4,
                'attribute_id' => 11,
                'position' => 1,
            ),
            11 => 
            array (
                'attribute_group_id' => 4,
                'attribute_id' => 12,
                'position' => 2,
            ),
            12 => 
            array (
                'attribute_group_id' => 4,
                'attribute_id' => 13,
                'position' => 3,
            ),
            13 => 
            array (
                'attribute_group_id' => 4,
                'attribute_id' => 14,
                'position' => 4,
            ),
            14 => 
            array (
                'attribute_group_id' => 4,
                'attribute_id' => 15,
                'position' => 5,
            ),
            15 => 
            array (
                'attribute_group_id' => 3,
                'attribute_id' => 16,
                'position' => 1,
            ),
            16 => 
            array (
                'attribute_group_id' => 3,
                'attribute_id' => 17,
                'position' => 2,
            ),
            17 => 
            array (
                'attribute_group_id' => 3,
                'attribute_id' => 18,
                'position' => 3,
            ),
            18 => 
            array (
                'attribute_group_id' => 5,
                'attribute_id' => 19,
                'position' => 1,
            ),
            19 => 
            array (
                'attribute_group_id' => 5,
                'attribute_id' => 20,
                'position' => 2,
            ),
            20 => 
            array (
                'attribute_group_id' => 5,
                'attribute_id' => 21,
                'position' => 3,
            ),
            21 => 
            array (
                'attribute_group_id' => 5,
                'attribute_id' => 22,
                'position' => 4,
            ),
            22 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 23,
                'position' => 11,
            ),
            23 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 24,
                'position' => 12,
            ),
            24 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 25,
                'position' => 13,
            ),
            25 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 26,
                'position' => 9,
            ),
            26 => 
            array (
                'attribute_group_id' => 1,
                'attribute_id' => 27,
                'position' => 2,
            ),
        ));
        
        
    }
}