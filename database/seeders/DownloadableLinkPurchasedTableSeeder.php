<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DownloadableLinkPurchasedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('downloadable_link_purchased')->delete();
        
        
        
    }
}