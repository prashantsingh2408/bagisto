<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingProductDefaultSlotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_product_default_slots')->delete();
        
        
        
    }
}