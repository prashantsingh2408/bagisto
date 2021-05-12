<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'api_token' => 'UJ6Dxx8rx6X4t48fiSAO0kVQe93rFl2OgTI6nJBTn45pK2BMZMk3fRhEmvWoCcsuJjklZw6gmTlBKOv2',
                'created_at' => '2021-03-20 15:14:19',
                'email' => 'admin@example.com',
                'id' => 1,
                'name' => 'Example',
                'password' => '$2y$10$a4V9Vbqz.5bAYbli8dYvjelCDhYvP1s8bKNTkDVhMGM7GrSx41N7C',
                'remember_token' => NULL,
                'role_id' => 1,
                'status' => 1,
                'updated_at' => '2021-03-20 15:14:19',
            ),
        ));
        
        
    }
}