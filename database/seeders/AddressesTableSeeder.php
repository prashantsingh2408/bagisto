<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'additional' => NULL,
                'address1' => 'sector 16',
                'address2' => NULL,
                'address_type' => 'cart_billing',
                'cart_id' => 1,
                'city' => 'nodia',
                'company_name' => 'pegalogics',
                'country' => 'IN',
                'created_at' => '2021-03-23 11:26:44',
                'customer_id' => NULL,
                'default_address' => 0,
                'email' => 'pegalogics@gmail.com',
                'first_name' => 'pega',
                'gender' => NULL,
                'id' => 1,
                'last_name' => 'logics',
                'order_id' => NULL,
                'phone' => '8417891491',
                'postcode' => '271010',
                'state' => 'UP',
                'updated_at' => '2021-03-23 11:26:44',
                'vat_id' => NULL,
            ),
            1 => 
            array (
                'additional' => NULL,
                'address1' => 'sector 16',
                'address2' => NULL,
                'address_type' => 'cart_shipping',
                'cart_id' => 1,
                'city' => 'nodia',
                'company_name' => 'pegalogics',
                'country' => 'IN',
                'created_at' => '2021-03-23 11:26:44',
                'customer_id' => NULL,
                'default_address' => 0,
                'email' => 'pegalogics@gmail.com',
                'first_name' => 'pega',
                'gender' => NULL,
                'id' => 2,
                'last_name' => 'logics',
                'order_id' => NULL,
                'phone' => '8417891491',
                'postcode' => '271010',
                'state' => 'UP',
                'updated_at' => '2021-03-23 11:26:44',
                'vat_id' => NULL,
            ),
            2 => 
            array (
                'additional' => NULL,
                'address1' => 'sector 16',
                'address2' => NULL,
                'address_type' => 'order_shipping',
                'cart_id' => NULL,
                'city' => 'nodia',
                'company_name' => 'pegalogics',
                'country' => 'IN',
                'created_at' => '2021-03-23 11:27:08',
                'customer_id' => NULL,
                'default_address' => 0,
                'email' => 'pegalogics@gmail.com',
                'first_name' => 'pega',
                'gender' => NULL,
                'id' => 3,
                'last_name' => 'logics',
                'order_id' => 1,
                'phone' => '8417891491',
                'postcode' => '271010',
                'state' => 'UP',
                'updated_at' => '2021-03-23 11:27:08',
                'vat_id' => NULL,
            ),
            3 => 
            array (
                'additional' => NULL,
                'address1' => 'sector 16',
                'address2' => NULL,
                'address_type' => 'order_billing',
                'cart_id' => NULL,
                'city' => 'nodia',
                'company_name' => 'pegalogics',
                'country' => 'IN',
                'created_at' => '2021-03-23 11:27:08',
                'customer_id' => NULL,
                'default_address' => 0,
                'email' => 'pegalogics@gmail.com',
                'first_name' => 'pega',
                'gender' => NULL,
                'id' => 4,
                'last_name' => 'logics',
                'order_id' => 1,
                'phone' => '8417891491',
                'postcode' => '271010',
                'state' => 'UP',
                'updated_at' => '2021-03-23 11:27:08',
                'vat_id' => NULL,
            ),
        ));
        
        
    }
}