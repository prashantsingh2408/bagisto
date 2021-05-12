<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => 'Administrator role',
                'id' => 1,
                'name' => 'Administrator',
                'permission_type' => 'all',
                'permissions' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}