<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoice_items')->delete();
        
        
        
    }
}