<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_pages')->delete();
        
        \DB::table('cms_pages')->insert(array (
            0 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 1,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            1 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 2,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            2 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 3,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            3 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 4,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            4 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 5,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            5 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 6,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            6 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 7,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            7 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 8,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            8 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 9,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            9 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 10,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            10 => 
            array (
                'created_at' => '2021-03-20 15:14:19',
                'id' => 11,
                'layout' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
            ),
            11 => 
            array (
                'created_at' => '2021-03-22 14:38:10',
                'id' => 12,
                'layout' => NULL,
                'updated_at' => '2021-03-22 14:38:10',
            ),
        ));
        
        
    }
}