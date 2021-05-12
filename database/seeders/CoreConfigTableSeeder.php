<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_config')->delete();
        
        \DB::table('core_config')->insert(array (
            0 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.guest-checkout.allow-guest-checkout',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 1,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            1 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.verification',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 2,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            2 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.registration',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 3,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            3 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.customer',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 4,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            4 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-order',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 5,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            5 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-admin',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 6,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            6 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-invoice',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 7,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            7 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-refund',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 8,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            8 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-shipment',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 9,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            9 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.new-inventory-source',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 10,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            10 => 
            array (
                'channel_code' => NULL,
                'code' => 'emails.general.notifications.emails.general.notifications.cancel-order',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 11,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            11 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.homepage.out_of_stock_items',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 12,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            12 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.social_login.enable_facebook',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 13,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            13 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.social_login.enable_twitter',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 14,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '0',
            ),
            14 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.social_login.enable_google',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 15,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 15:14:19',
                'value' => '1',
            ),
            15 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.social_login.enable_linkedin',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 16,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '0',
            ),
            16 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.social_login.enable_github',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 17,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '0',
            ),
            17 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 18,
                'locale_code' => 'en',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            18 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 19,
                'locale_code' => 'fr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            19 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 20,
                'locale_code' => 'ar',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            20 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 21,
                'locale_code' => 'de',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            21 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 22,
                'locale_code' => 'es',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            22 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 23,
                'locale_code' => 'fa',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            23 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 24,
                'locale_code' => 'it',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            24 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 25,
                'locale_code' => 'ja',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            25 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 26,
                'locale_code' => 'nl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            26 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 27,
                'locale_code' => 'pl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            27 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 28,
                'locale_code' => 'pt_BR',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            28 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.compare_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 29,
                'locale_code' => 'tr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            29 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 30,
                'locale_code' => 'en',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            30 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 31,
                'locale_code' => 'fr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            31 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 32,
                'locale_code' => 'ar',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            32 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 33,
                'locale_code' => 'de',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            33 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 34,
                'locale_code' => 'es',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            34 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 35,
                'locale_code' => 'fa',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            35 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 36,
                'locale_code' => 'it',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            36 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 37,
                'locale_code' => 'ja',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            37 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 38,
                'locale_code' => 'nl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            38 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 39,
                'locale_code' => 'pl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            39 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 40,
                'locale_code' => 'pt_BR',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            40 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.wishlist_option',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 41,
                'locale_code' => 'tr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            41 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 42,
                'locale_code' => 'en',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            42 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 43,
                'locale_code' => 'fr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            43 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 44,
                'locale_code' => 'ar',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            44 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 45,
                'locale_code' => 'de',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            45 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 46,
                'locale_code' => 'es',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            46 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 47,
                'locale_code' => 'fa',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            47 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 48,
                'locale_code' => 'it',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            48 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 49,
                'locale_code' => 'ja',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            49 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 50,
                'locale_code' => 'nl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            50 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 51,
                'locale_code' => 'pl',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            51 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 52,
                'locale_code' => 'pt_BR',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            52 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.shop.image_search',
                'created_at' => '2021-03-20 15:14:20',
                'id' => 53,
                'locale_code' => 'tr',
                'updated_at' => '2021-03-20 15:14:20',
                'value' => '1',
            ),
            53 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.footer.footer_content',
                'created_at' => '2021-03-20 17:29:12',
                'id' => 56,
                'locale_code' => 'en',
                'updated_at' => '2021-03-23 17:59:31',
                'value' => 'Copyright 2021 Income Grocery. All rights reserved | Powered by PegaLogics    ',
            ),
            54 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.footer.footer_toggle',
                'created_at' => '2021-03-20 17:29:12',
                'id' => 57,
                'locale_code' => 'en',
                'updated_at' => '2021-03-20 17:45:00',
                'value' => '1',
            ),
            55 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.custom_scripts.custom_css',
                'created_at' => '2021-03-20 17:29:12',
                'id' => 58,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 17:29:12',
                'value' => '',
            ),
            56 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.content.custom_scripts.custom_javascript',
                'created_at' => '2021-03-20 17:29:12',
                'id' => 59,
                'locale_code' => NULL,
                'updated_at' => '2021-03-20 17:29:12',
                'value' => '',
            ),
            57 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.general.locale_options.weight_unit',
                'created_at' => '2021-03-22 07:47:47',
                'id' => 60,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 18:08:33',
                'value' => 'kgs',
            ),
            58 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.general.email_settings.sender_name',
                'created_at' => '2021-03-22 07:47:47',
                'id' => 61,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 07:47:47',
                'value' => 'pegalogics@gmail.com',
            ),
            59 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.general.email_settings.shop_email_from',
                'created_at' => '2021-03-22 07:47:47',
                'id' => 62,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 07:47:47',
                'value' => 'pegalogics@gmail.com',
            ),
            60 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.general.email_settings.admin_name',
                'created_at' => '2021-03-22 07:47:47',
                'id' => 63,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 07:47:47',
                'value' => 'Admin',
            ),
            61 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.general.email_settings.admin_email',
                'created_at' => '2021-03-22 07:47:47',
                'id' => 64,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 07:47:47',
                'value' => 'pegalogics@gmail.com',
            ),
            62 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.title',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 65,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'PayPal Smart Button',
            ),
            63 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.description',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 66,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'PayPal',
            ),
            64 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.client_id',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 67,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'sb',
            ),
            65 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.client_secret',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 68,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '',
            ),
            66 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.accepted_currencies',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 69,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '',
            ),
            67 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.active',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 70,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '0',
            ),
            68 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.sandbox',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 71,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            69 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_smart_button.sort',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 72,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            70 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.cashondelivery.title',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 73,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'Cash On Delivery',
            ),
            71 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.cashondelivery.description',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 74,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'Cash On Delivery',
            ),
            72 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.cashondelivery.active',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 75,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            73 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.cashondelivery.instructions',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 76,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '',
            ),
            74 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.cashondelivery.sort',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 77,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            75 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.moneytransfer.title',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 78,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'Money Transfer',
            ),
            76 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.moneytransfer.description',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 79,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'Money Transfer',
            ),
            77 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.moneytransfer.active',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 80,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            78 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.moneytransfer.mailing_address',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 81,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '',
            ),
            79 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.moneytransfer.sort',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 82,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '2',
            ),
            80 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.title',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 83,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'PayPal Standard',
            ),
            81 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.description',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 84,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'PayPal Standard',
            ),
            82 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.business_account',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 85,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => 'test@webkul.com',
            ),
            83 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.active',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 86,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:37',
                'value' => '0',
            ),
            84 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.sandbox',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 87,
                'locale_code' => 'en',
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '1',
            ),
            85 => 
            array (
                'channel_code' => NULL,
                'code' => 'sales.paymentmethods.paypal_standard.sort',
                'created_at' => '2021-03-22 18:03:17',
                'id' => 88,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:03:17',
                'value' => '3',
            ),
            86 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.design.admin_logo.logo_image',
                'created_at' => '2021-03-22 18:31:38',
                'id' => 89,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:31:38',
                'value' => 'configuration/GUI7D8GTzpCA265DVsbZ5bbyUccOoEJPj56CLrz1.png',
            ),
            87 => 
            array (
                'channel_code' => 'default',
                'code' => 'general.design.admin_logo.favicon',
                'created_at' => '2021-03-22 18:31:38',
                'id' => 90,
                'locale_code' => NULL,
                'updated_at' => '2021-03-22 18:31:38',
                'value' => 'configuration/VqRFZ22N0GbFmmHT5nqikSR4sOEvFyapfXnf2TqD.png',
            ),
            88 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.enable',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 91,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            89 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_sku',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 92,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            90 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_weight',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 93,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            91 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_categories',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 94,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            92 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_images',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 95,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            93 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_reviews',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 96,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            94 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_ratings',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 97,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            95 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.products.show_offers',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 98,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            96 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.categories.enable',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 99,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            97 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.rich_snippets.categories.show_search_input_field',
                'created_at' => '2021-03-23 11:08:26',
                'id' => 100,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:08:26',
                'value' => '1',
            ),
            98 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.homepage.no_of_new_product_homepage',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 101,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            99 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.homepage.no_of_featured_product_homepage',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 102,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            100 => 
            array (
                'channel_code' => 'default',
                'code' => 'catalog.products.storefront.mode',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 103,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => 'grid',
            ),
            101 => 
            array (
                'channel_code' => 'default',
                'code' => 'catalog.products.storefront.products_per_page',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 104,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            102 => 
            array (
                'channel_code' => 'default',
                'code' => 'catalog.products.storefront.sort_by',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 105,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => 'name-desc',
            ),
            103 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.storefront.buy_now_button_display',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 106,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:51',
                'value' => '1',
            ),
            104 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.review.guest_review',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 107,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:51',
                'value' => '1',
            ),
            105 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.attribute.image_attribute_upload_size',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 108,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            106 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.attribute.file_attribute_upload_size',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 109,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            107 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.enabled',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 110,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            108 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.facebook',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 111,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            109 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.twitter',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 112,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            110 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.pinterest',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 113,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            111 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.whatsapp',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 114,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            112 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.linkedin',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 115,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            113 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.email',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 116,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '1',
            ),
            114 => 
            array (
                'channel_code' => NULL,
                'code' => 'catalog.products.social_share.share_message',
                'created_at' => '2021-03-23 11:09:29',
                'id' => 117,
                'locale_code' => NULL,
                'updated_at' => '2021-03-23 11:09:29',
                'value' => '',
            ),
            115 => 
            array (
                'channel_code' => 'default',
                'code' => 'customer.settings.address.street_lines',
                'created_at' => '2021-04-01 16:18:20',
                'id' => 118,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '',
            ),
            116 => 
            array (
                'channel_code' => NULL,
                'code' => 'customer.settings.newsletter.subscription',
                'created_at' => '2021-04-01 16:18:20',
                'id' => 119,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '0',
            ),
            117 => 
            array (
                'channel_code' => NULL,
                'code' => 'customer.settings.email.verification',
                'created_at' => '2021-04-01 16:18:20',
                'id' => 120,
                'locale_code' => NULL,
                'updated_at' => '2021-04-01 16:18:20',
                'value' => '0',
            ),
        ));
        
        
    }
}