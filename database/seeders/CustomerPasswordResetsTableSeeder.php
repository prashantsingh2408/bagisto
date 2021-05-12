<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_password_resets')->delete();
        
        \DB::table('customer_password_resets')->insert(array (
            0 => 
            array (
                'created_at' => '2021-04-06 18:13:46',
                'email' => 'prashantsingh2408cloud@gmail.com',
                'token' => '$2y$10$ySqY6yL6GRC7YlbXdT1PFuX1OG8wn4L8uKcj/9DH22f6UXRlVIaGm',
            ),
            1 => 
            array (
                'created_at' => '2021-04-07 12:57:37',
                'email' => 'prashantsingh2411cloud@gmail.com',
                'token' => '$2y$10$Ft/aIE/NB5AZpFJoWQcM4.Je3mniWB669.uMwtt5LPDB8hOOJ3QTC',
            ),
            2 => 
            array (
                'created_at' => '2021-04-07 13:08:02',
                'email' => 'harishankar@gmail.com',
                'token' => '$2y$10$fJSgZEhw9uW53GtDWOOtH.5Vo1sa3QIVWJc8M7SAK/bRs95kgZbTK',
            ),
            3 => 
            array (
                'created_at' => '2021-05-12 13:09:53',
                'email' => 'prashantsingh2408@gmail.com',
                'token' => '$2y$10$jz8HglAoJ4Fo/K9qml4GY.jr.1MyjpDDaDXxWa.aXhGbzqqaa2yTS',
            ),
        ));
        
        
    }
}