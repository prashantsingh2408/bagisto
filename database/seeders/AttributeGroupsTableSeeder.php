<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_groups')->delete();
        
        \DB::table('attribute_groups')->insert(array (
            0 => 
            array (
                'attribute_family_id' => 1,
                'id' => 1,
                'is_user_defined' => 0,
                'name' => 'General',
                'position' => 1,
            ),
            1 => 
            array (
                'attribute_family_id' => 1,
                'id' => 2,
                'is_user_defined' => 0,
                'name' => 'Description',
                'position' => 2,
            ),
            2 => 
            array (
                'attribute_family_id' => 1,
                'id' => 3,
                'is_user_defined' => 0,
                'name' => 'Meta Description',
                'position' => 3,
            ),
            3 => 
            array (
                'attribute_family_id' => 1,
                'id' => 4,
                'is_user_defined' => 0,
                'name' => 'Price',
                'position' => 4,
            ),
            4 => 
            array (
                'attribute_family_id' => 1,
                'id' => 5,
                'is_user_defined' => 0,
                'name' => 'Shipping',
                'position' => 5,
            ),
        ));
        
        
    }
}