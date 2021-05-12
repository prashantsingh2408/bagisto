<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeFamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_families')->delete();
        
        \DB::table('attribute_families')->insert(array (
            0 => 
            array (
                'code' => 'default',
                'id' => 1,
                'is_user_defined' => 1,
                'name' => 'Default',
                'status' => 0,
            ),
        ));
        
        
    }
}