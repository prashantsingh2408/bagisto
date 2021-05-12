<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'admin_name' => 'SKU',
                'code' => 'sku',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 1,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 1,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 1,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            1 => 
            array (
                'admin_name' => 'Name',
                'code' => 'name',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 2,
                'is_comparable' => 1,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 3,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            2 => 
            array (
                'admin_name' => 'URL Key',
                'code' => 'url_key',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 3,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 1,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 4,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            3 => 
            array (
                'admin_name' => 'Tax Category',
                'code' => 'tax_category_id',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 4,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 5,
                'swatch_type' => NULL,
                'type' => 'select',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 0,
            ),
            4 => 
            array (
                'admin_name' => 'New',
                'code' => 'new',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 5,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 6,
                'swatch_type' => NULL,
                'type' => 'boolean',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            5 => 
            array (
                'admin_name' => 'Featured',
                'code' => 'featured',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 6,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 7,
                'swatch_type' => NULL,
                'type' => 'boolean',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            6 => 
            array (
                'admin_name' => 'Visible Individually',
                'code' => 'visible_individually',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 7,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 9,
                'swatch_type' => NULL,
                'type' => 'boolean',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            7 => 
            array (
                'admin_name' => 'Status',
                'code' => 'status',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 8,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 10,
                'swatch_type' => NULL,
                'type' => 'boolean',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            8 => 
            array (
                'admin_name' => 'Short Description',
                'code' => 'short_description',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 9,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 11,
                'swatch_type' => NULL,
                'type' => 'textarea',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            9 => 
            array (
                'admin_name' => 'Description',
                'code' => 'description',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 10,
                'is_comparable' => 1,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 12,
                'swatch_type' => NULL,
                'type' => 'textarea',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            10 => 
            array (
                'admin_name' => 'Price',
                'code' => 'price',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 11,
                'is_comparable' => 1,
                'is_configurable' => 0,
                'is_filterable' => 1,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 13,
                'swatch_type' => NULL,
                'type' => 'price',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            11 => 
            array (
                'admin_name' => 'Cost',
                'code' => 'cost',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 12,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 14,
                'swatch_type' => NULL,
                'type' => 'price',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 1,
                'value_per_locale' => 0,
            ),
            12 => 
            array (
                'admin_name' => 'Special Price',
                'code' => 'special_price',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 13,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 15,
                'swatch_type' => NULL,
                'type' => 'price',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            13 => 
            array (
                'admin_name' => 'Special Price From',
                'code' => 'special_price_from',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 14,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 16,
                'swatch_type' => NULL,
                'type' => 'date',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 0,
            ),
            14 => 
            array (
                'admin_name' => 'Special Price To',
                'code' => 'special_price_to',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 15,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 17,
                'swatch_type' => NULL,
                'type' => 'date',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 0,
            ),
            15 => 
            array (
                'admin_name' => 'Meta Title',
                'code' => 'meta_title',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 16,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 18,
                'swatch_type' => NULL,
                'type' => 'textarea',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            16 => 
            array (
                'admin_name' => 'Meta Keywords',
                'code' => 'meta_keywords',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 17,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 20,
                'swatch_type' => NULL,
                'type' => 'textarea',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            17 => 
            array (
                'admin_name' => 'Meta Description',
                'code' => 'meta_description',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 18,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 21,
                'swatch_type' => NULL,
                'type' => 'textarea',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 1,
                'value_per_locale' => 1,
            ),
            18 => 
            array (
                'admin_name' => 'Width',
                'code' => 'width',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 19,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 22,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            19 => 
            array (
                'admin_name' => 'Height',
                'code' => 'height',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 20,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 23,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            20 => 
            array (
                'admin_name' => 'Depth',
                'code' => 'depth',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 21,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 24,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            21 => 
            array (
                'admin_name' => 'Weight',
                'code' => 'weight',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 22,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 25,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => 'decimal',
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            22 => 
            array (
                'admin_name' => 'Color',
                'code' => 'color',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 23,
                'is_comparable' => 0,
                'is_configurable' => 1,
                'is_filterable' => 1,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 26,
                'swatch_type' => NULL,
                'type' => 'select',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            23 => 
            array (
                'admin_name' => 'Size',
                'code' => 'size',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 24,
                'is_comparable' => 0,
                'is_configurable' => 1,
                'is_filterable' => 1,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 0,
                'position' => 27,
                'swatch_type' => NULL,
                'type' => 'select',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            24 => 
            array (
                'admin_name' => 'Brand',
                'code' => 'brand',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 25,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 1,
                'is_required' => 0,
                'is_unique' => 0,
                'is_user_defined' => 1,
                'is_visible_on_front' => 1,
                'position' => 28,
                'swatch_type' => NULL,
                'type' => 'select',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            25 => 
            array (
                'admin_name' => 'Guest Checkout',
                'code' => 'guest_checkout',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 26,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 1,
                'is_unique' => 0,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 8,
                'swatch_type' => NULL,
                'type' => 'boolean',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
            26 => 
            array (
                'admin_name' => 'Product Number',
                'code' => 'product_number',
                'created_at' => '2021-03-20 15:14:19',
                'id' => 27,
                'is_comparable' => 0,
                'is_configurable' => 0,
                'is_filterable' => 0,
                'is_required' => 0,
                'is_unique' => 1,
                'is_user_defined' => 0,
                'is_visible_on_front' => 0,
                'position' => 2,
                'swatch_type' => NULL,
                'type' => 'text',
                'updated_at' => '2021-03-20 15:14:19',
                'use_in_flat' => 1,
                'validation' => NULL,
                'value_per_channel' => 0,
                'value_per_locale' => 0,
            ),
        ));
        
        
    }
}