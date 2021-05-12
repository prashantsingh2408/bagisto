<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogRuleCustomerGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_rule_customer_groups')->delete();
        
        \DB::table('catalog_rule_customer_groups')->insert(array (
            0 => 
            array (
                'catalog_rule_id' => 1,
                'customer_group_id' => 1,
            ),
        ));
        
        
    }
}