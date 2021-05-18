<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 2,
                'path' => 'product/1/Qm7OspkwspfnYmamRPFwLAoyWPmddJ5L1adNdgmW.jpg',
                'product_id' => 1,
                'type' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'path' => 'product/4/tMgHubLOOCtitOIpTcH2DOccceJB5npfHbuCzqN1.jpg',
                'product_id' => 4,
                'type' => NULL,
            ),
        ));
        
        
    }
}