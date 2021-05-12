<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShipmentItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipment_items')->delete();
        
        
        
    }
}