<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RefundItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('refund_items')->delete();
        
        
        
    }
}