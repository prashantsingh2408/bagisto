<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsPageChannelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_page_channels')->delete();
        
        \DB::table('cms_page_channels')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'cms_page_id' => 1,
            ),
            1 => 
            array (
                'channel_id' => 1,
                'cms_page_id' => 7,
            ),
            2 => 
            array (
                'channel_id' => 1,
                'cms_page_id' => 11,
            ),
            3 => 
            array (
                'channel_id' => 1,
                'cms_page_id' => 12,
            ),
        ));
        
        
    }
}