<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locales')->delete();
        
        \DB::table('locales')->insert(array (
            0 => 
            array (
                'code' => 'en',
                'created_at' => NULL,
                'direction' => 'ltr',
                'id' => 1,
                'locale_image' => NULL,
                'name' => 'English',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code' => 'fr',
                'created_at' => NULL,
                'direction' => 'ltr',
                'id' => 2,
                'locale_image' => NULL,
                'name' => 'French',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'code' => 'nl',
                'created_at' => NULL,
                'direction' => 'ltr',
                'id' => 3,
                'locale_image' => NULL,
                'name' => 'Dutch',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'code' => 'tr',
                'created_at' => NULL,
                'direction' => 'ltr',
                'id' => 4,
                'locale_image' => NULL,
                'name' => 'Türkçe',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'code' => 'es',
                'created_at' => NULL,
                'direction' => 'ltr',
                'id' => 5,
                'locale_image' => NULL,
                'name' => 'Español',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}