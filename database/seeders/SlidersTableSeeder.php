<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'content' => '',
                'created_at' => '2021-03-22 06:21:34',
                'id' => 1,
                'locale' => 'en',
                'path' => 'slider_images/Default/R0o7NhymNV8gqXZJDHmqilBvJJDwv2MKJXU02aZj.jpg',
                'slider_path' => '',
                'title' => 'shopslider1',
                'updated_at' => '2021-03-23 18:10:28',
            ),
            1 => 
            array (
                'channel_id' => 1,
                'content' => '',
                'created_at' => '2021-03-22 06:36:05',
                'id' => 2,
                'locale' => 'en',
                'path' => 'slider_images/Default/1zzWJmYlFNIK4vUWphHTRBFwVkzuj5cwMz5oQb1k.jpg',
                'slider_path' => '',
                'title' => 'shopslider2',
                'updated_at' => '2021-03-23 18:10:43',
            ),
            2 => 
            array (
                'channel_id' => 1,
                'content' => '',
                'created_at' => '2021-03-22 06:58:27',
                'id' => 3,
                'locale' => 'en',
                'path' => 'slider_images/Default/g1cSEAEQTSeWraxZZJR1ziFFpMxo77udNpdVayVl.jpg',
                'slider_path' => '',
                'title' => 'shopslider3',
                'updated_at' => '2021-03-23 18:12:24',
            ),
        ));
        
        
    }
}