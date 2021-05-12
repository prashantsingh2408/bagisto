<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_rules')->delete();
        
        \DB::table('catalog_rules')->insert(array (
            0 => 
            array (
                'action_type' => 'by_percent',
                'condition_type' => 1,
                'conditions' => NULL,
                'created_at' => '2021-03-23 11:11:41',
                'description' => 'Description Catelog rule',
                'discount_amount' => '0.0000',
                'end_other_rules' => 0,
                'ends_till' => '2021-03-31',
                'id' => 1,
                'name' => 'Catalog Rule',
                'sort_order' => 0,
                'starts_from' => '2021-03-23',
                'status' => 1,
                'updated_at' => '2021-03-23 11:11:41',
            ),
        ));
        
        
    }
}