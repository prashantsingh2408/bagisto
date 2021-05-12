<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_groups')->delete();
        
        \DB::table('customer_groups')->insert(array (
            0 => 
            array (
                'code' => 'guest',
                'created_at' => NULL,
                'id' => 1,
                'is_user_defined' => 0,
                'name' => 'Guest',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code' => 'general',
                'created_at' => NULL,
                'id' => 2,
                'is_user_defined' => 0,
                'name' => 'General',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'code' => 'wholesale',
                'created_at' => NULL,
                'id' => 3,
                'is_user_defined' => 0,
                'name' => 'Wholesale',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}