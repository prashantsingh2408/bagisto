<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                '_lft' => 1,
                '_rgt' => 36,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-20 15:14:17',
                'display_mode' => 'products_and_description',
                'id' => 1,
                'image' => NULL,
                'parent_id' => NULL,
                'position' => 1,
                'status' => 1,
                'updated_at' => '2021-03-20 15:14:17',
            ),
            1 => 
            array (
                '_lft' => 14,
                '_rgt' => 15,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-20 18:00:22',
                'display_mode' => 'products_and_description',
                'id' => 2,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 2,
                'status' => 1,
                'updated_at' => '2021-03-22 11:02:43',
            ),
            2 => 
            array (
                '_lft' => 16,
                '_rgt' => 19,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 11:01:37',
                'display_mode' => 'products_and_description',
                'id' => 3,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 3,
                'status' => 1,
                'updated_at' => '2021-03-22 11:05:36',
            ),
            3 => 
            array (
                '_lft' => 20,
                '_rgt' => 21,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 11:14:12',
                'display_mode' => 'products_and_description',
                'id' => 4,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 4,
                'status' => 1,
                'updated_at' => '2021-03-22 11:14:12',
            ),
            4 => 
            array (
                '_lft' => 22,
                '_rgt' => 23,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 12:29:06',
                'display_mode' => 'products_and_description',
                'id' => 5,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 5,
                'status' => 1,
                'updated_at' => '2021-03-22 12:29:06',
            ),
            5 => 
            array (
                '_lft' => 24,
                '_rgt' => 25,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 12:30:03',
                'display_mode' => 'products_and_description',
                'id' => 6,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 6,
                'status' => 1,
                'updated_at' => '2021-03-22 12:30:03',
            ),
            6 => 
            array (
                '_lft' => 26,
                '_rgt' => 27,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 12:38:34',
                'display_mode' => 'products_and_description',
                'id' => 7,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 6,
                'status' => 1,
                'updated_at' => '2021-03-22 12:38:34',
            ),
            7 => 
            array (
                '_lft' => 28,
                '_rgt' => 29,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 14:57:36',
                'display_mode' => 'products_and_description',
                'id' => 8,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 51,
                'status' => 0,
                'updated_at' => '2021-03-22 15:30:22',
            ),
            8 => 
            array (
                '_lft' => 30,
                '_rgt' => 31,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 15:31:48',
                'display_mode' => 'products_and_description',
                'id' => 9,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 52,
                'status' => 0,
                'updated_at' => '2021-03-22 15:37:37',
            ),
            9 => 
            array (
                '_lft' => 32,
                '_rgt' => 33,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 15:35:55',
                'display_mode' => 'products_and_description',
                'id' => 10,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 53,
                'status' => 0,
                'updated_at' => '2021-03-22 15:37:48',
            ),
            10 => 
            array (
                '_lft' => 17,
                '_rgt' => 18,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-22 17:38:30',
                'display_mode' => 'products_and_description',
                'id' => 11,
                'image' => NULL,
                'parent_id' => 3,
                'position' => 11,
                'status' => 1,
                'updated_at' => '2021-03-22 17:38:30',
            ),
            11 => 
            array (
                '_lft' => 34,
                '_rgt' => 35,
                'additional' => NULL,
                'category_icon_path' => NULL,
                'created_at' => '2021-03-25 15:06:35',
                'display_mode' => 'products_and_description',
                'id' => 12,
                'image' => NULL,
                'parent_id' => 1,
                'position' => 10,
                'status' => 1,
                'updated_at' => '2021-03-25 15:06:35',
            ),
        ));
        
        
    }
}