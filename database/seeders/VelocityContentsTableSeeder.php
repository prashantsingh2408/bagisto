<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VelocityContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('velocity_contents')->delete();
        
        \DB::table('velocity_contents')->insert(array (
            0 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 11:10:29',
                'id' => 1,
                'position' => 1,
                'status' => 1,
                'updated_at' => '2021-03-22 11:10:29',
            ),
            1 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 11:11:28',
                'id' => 2,
                'position' => 2,
                'status' => 1,
                'updated_at' => '2021-03-22 11:11:28',
            ),
            2 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 11:16:56',
                'id' => 3,
                'position' => 3,
                'status' => 1,
                'updated_at' => '2021-03-22 11:16:56',
            ),
            3 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 12:36:32',
                'id' => 4,
                'position' => 4,
                'status' => 1,
                'updated_at' => '2021-03-22 12:36:32',
            ),
            4 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 12:37:41',
                'id' => 5,
                'position' => 5,
                'status' => 1,
                'updated_at' => '2021-03-22 12:37:41',
            ),
            5 => 
            array (
                'content_type' => 'category',
                'created_at' => '2021-03-22 12:39:17',
                'id' => 6,
                'position' => 6,
                'status' => 1,
                'updated_at' => '2021-03-22 12:39:17',
            ),
        ));
        
        
    }
}