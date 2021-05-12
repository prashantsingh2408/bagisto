<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventorySourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inventory_sources')->delete();
        
        \DB::table('inventory_sources')->insert(array (
            0 => 
            array (
                'city' => 'Detroit',
                'code' => 'default',
                'contact_email' => 'warehouse@example.com',
                'contact_fax' => NULL,
                'contact_name' => 'Detroit Warehouse',
                'contact_number' => '1234567899',
                'country' => 'US',
                'created_at' => NULL,
                'description' => NULL,
                'id' => 1,
                'latitude' => NULL,
                'longitude' => NULL,
                'name' => 'Default',
                'postcode' => '48127',
                'priority' => 0,
                'state' => 'MI',
                'status' => 1,
                'street' => '12th Street',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}