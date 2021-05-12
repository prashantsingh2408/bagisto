<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_products')->delete();
        
        
        
    }
}