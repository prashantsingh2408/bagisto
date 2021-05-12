<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlist')->delete();
        
        
        
    }
}