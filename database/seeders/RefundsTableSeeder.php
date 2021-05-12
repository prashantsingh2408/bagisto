<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RefundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('refunds')->delete();
        
        
        
    }
}