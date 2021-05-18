<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_videos')->delete();
        
        
        
    }
}