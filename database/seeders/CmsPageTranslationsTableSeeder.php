<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsPageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_page_translations')->delete();
        
        \DB::table('cms_page_translations')->insert(array (
            0 => 
            array (
                'cms_page_id' => 1,
                'html_content' => '<div class="static-container">
<div class="mb-5">
<p>You can edit it from pagalogics admin CMS</p>
<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>
</div>
</div>',
                'id' => 1,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'aboutus',
                'meta_title' => 'about us',
                'page_title' => 'About Us',
                'url_key' => 'about-us',
            ),
            1 => 
            array (
                'cms_page_id' => 2,
                'html_content' => '<div class="static-container"><div class="mb-5">Return policy page content</div></div>',
                'id' => 2,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'return, policy',
                'meta_title' => 'return policy',
                'page_title' => 'Return Policy',
                'url_key' => 'return-policy',
            ),
            2 => 
            array (
                'cms_page_id' => 3,
                'html_content' => '<div class="static-container"><div class="mb-5">Refund policy page content</div></div>',
                'id' => 3,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'refund, policy',
                'meta_title' => 'Refund policy',
                'page_title' => 'Refund Policy',
                'url_key' => 'refund-policy',
            ),
            3 => 
            array (
                'cms_page_id' => 4,
                'html_content' => '<div class="static-container"><div class="mb-5">Terms & conditions page content</div></div>',
                'id' => 4,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'term, conditions',
                'meta_title' => 'Terms & Conditions',
                'page_title' => 'Terms & Conditions',
                'url_key' => 'terms-conditions',
            ),
            4 => 
            array (
                'cms_page_id' => 5,
                'html_content' => '<div class="static-container"><div class="mb-5">Terms of use page content</div></div>',
                'id' => 5,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'term, use',
                'meta_title' => 'Terms of use',
                'page_title' => 'Terms of use',
                'url_key' => 'terms-of-use',
            ),
            5 => 
            array (
                'cms_page_id' => 6,
                'html_content' => '<div class="static-container"><div class="mb-5">Contact us page content</div></div>',
                'id' => 6,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'contact, us',
                'meta_title' => 'Contact Us',
                'page_title' => 'Contact Us',
                'url_key' => 'contact-us',
            ),
            6 => 
            array (
                'cms_page_id' => 7,
                'html_content' => '<div class="static-container">
<div class="mb-5">Customer service page contentgkghkhhhkhkj</div>
</div>',
                'id' => 7,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'customer, service',
                'meta_title' => 'Customer Service',
                'page_title' => 'Customer Service',
                'url_key' => 'cutomer-service',
            ),
            7 => 
            array (
                'cms_page_id' => 8,
                'html_content' => '<div class="static-container"><div class="mb-5">What\'s New page content</div></div>',
                'id' => 8,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'new',
                'meta_title' => 'What\'s New',
                'page_title' => 'What\'s New',
                'url_key' => 'whats-new',
            ),
            8 => 
            array (
                'cms_page_id' => 9,
                'html_content' => '<div class="static-container"><div class="mb-5">Payment Policy page content</div></div>',
                'id' => 9,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'payment, policy',
                'meta_title' => 'Payment Policy',
                'page_title' => 'Payment Policy',
                'url_key' => 'payment-policy',
            ),
            9 => 
            array (
                'cms_page_id' => 10,
                'html_content' => '<div class="static-container"><div class="mb-5">Shipping Policy  page content</div></div>',
                'id' => 10,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'shipping, policy',
                'meta_title' => 'Shipping Policy',
                'page_title' => 'Shipping Policy',
                'url_key' => 'shipping-policy',
            ),
            10 => 
            array (
                'cms_page_id' => 11,
                'html_content' => '<div class="static-container">
<div class="mb-5">
<p>You can edit it from pagalogics admin CMS</p>
<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>
</div>
</div>',
                'id' => 11,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => 'privacy, policy',
                'meta_title' => 'Privacy Policy',
                'page_title' => 'Privacy Policy',
                'url_key' => 'privacy-policy',
            ),
            11 => 
            array (
                'cms_page_id' => 12,
                'html_content' => '<p>You can edit it from pagalogics admin CMS</p>
<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>',
                'id' => 12,
                'locale' => 'en',
                'meta_description' => '',
                'meta_keywords' => '',
                'meta_title' => '',
                'page_title' => 'Terms of use ',
                'url_key' => 'termofuse',
            ),
            12 => 
            array (
                'cms_page_id' => 12,
                'html_content' => '<p>Add form admin panel</p>',
                'id' => 13,
                'locale' => 'fr',
                'meta_description' => '',
                'meta_keywords' => '',
                'meta_title' => '',
                'page_title' => 'Terms of use ',
                'url_key' => 'termofuse',
            ),
            13 => 
            array (
                'cms_page_id' => 12,
                'html_content' => '<p>Add form admin panel</p>',
                'id' => 14,
                'locale' => 'nl',
                'meta_description' => '',
                'meta_keywords' => '',
                'meta_title' => '',
                'page_title' => 'Terms of use ',
                'url_key' => 'termofuse',
            ),
            14 => 
            array (
                'cms_page_id' => 12,
                'html_content' => '<p>Add form admin panel</p>',
                'id' => 15,
                'locale' => 'tr',
                'meta_description' => '',
                'meta_keywords' => '',
                'meta_title' => '',
                'page_title' => 'Terms of use ',
                'url_key' => 'termofuse',
            ),
            15 => 
            array (
                'cms_page_id' => 12,
                'html_content' => '<p>Add form admin panel</p>',
                'id' => 16,
                'locale' => 'es',
                'meta_description' => '',
                'meta_keywords' => '',
                'meta_title' => '',
                'page_title' => 'Terms of use ',
                'url_key' => 'termofuse',
            ),
        ));
        
        
    }
}