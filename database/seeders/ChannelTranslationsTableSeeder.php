<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('channel_translations')->delete();
        
        \DB::table('channel_translations')->insert(array (
            0 => 
            array (
                'channel_id' => 1,
                'created_at' => NULL,
                'description' => '',
                'footer_content' => '<div class="list-container"><span class="list-heading">Quick Links</span>
<ul class="list-group">
<li><a href="@php echo route(\'shop.cms.page\', \'about-us\') @endphp">About Us</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'return-policy\') @endphp">Return Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp">Refund Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp">Terms and conditions</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp">Terms of Use</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'contact-us\') @endphp">Contact Us</a></li>
</ul>
</div>
<div class="list-container"><span class="list-heading">Connect With Us</span>
<ul class="list-group">
<li><a href="#"><span class="icon icon-facebook"></span>Facebook </a></li>
<li><a href="#"><span class="icon icon-twitter"></span> Twitter </a></li>
<li><a href="#"><span class="icon icon-instagram"></span> Instagram </a></li>
<li><a href="#"> <span class="icon icon-google-plus"></span>Google+ </a></li>
<li><a href="#"> <span class="icon icon-linkedin"></span>LinkedIn </a></li>
</ul>
</div>',
            'home_page_content' => '<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p>
<div class="banner-container">
<div class="left-banner"><img src="http://localhost/themes/default/assets/images/1.webp" data-src="http://localhost/themes/default/assets/images/1.webp" class="lazyload" alt="test" width="720" height="720" /></div>
<div class="right-banner"><img src="http://localhost/themes/default/assets/images/2.webp" data-src="http://localhost/themes/default/assets/images/2.webp" class="lazyload" alt="test" width="460" height="330" /> <img src="http://localhost/themes/default/assets/images/3.webp" data-src="http://localhost/themes/default/assets/images/3.webp" class="lazyload" alt="test" width="460" height="330" /></div>
</div>',
                'home_seo' => '{"meta_title": "Grocery Income", "meta_keywords": "store meta keyword", "meta_description": "store meta description"}',
                'id' => 1,
                'locale' => 'en',
                'maintenance_mode_text' => '',
                'name' => 'Default',
                'updated_at' => '2021-03-23 17:51:08',
            ),
            1 => 
            array (
                'channel_id' => 1,
                'created_at' => NULL,
                'description' => NULL,
                'footer_content' => '
<div class="list-container">
<span class="list-heading">Quick Links</span>
<ul class="list-group">
<li><a href="@php echo route(\'shop.cms.page\', \'about-us\') @endphp">About Us</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'return-policy\') @endphp">Return Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp">Refund Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp">Terms and conditions</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp">Terms of Use</a></li><li><a href="@php echo route(\'shop.cms.page\', \'contact-us\') @endphp">Contact Us</a></li>
</ul>
</div>
<div class="list-container">
<span class="list-heading">Connect With Us</span>
<ul class="list-group">
<li><a href="#"><span class="icon icon-facebook"></span>Facebook </a></li>
<li><a href="#"><span class="icon icon-twitter"></span> Twitter </a></li>
<li><a href="#"><span class="icon icon-instagram"></span> Instagram </a></li>
<li><a href="#"> <span class="icon icon-google-plus"></span>Google+ </a></li>
<li><a href="#"> <span class="icon icon-linkedin"></span>LinkedIn </a></li>
</ul>
</div>
',
                'home_page_content' => '
<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p>
<div class="banner-container">
<div class="left-banner">
<img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class="lazyload" alt="test" width="720" height="720" />
</div>
<div class="right-banner">
<img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class="lazyload" alt="test" width="460" height="330" />
<img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class="lazyload" alt="test" width="460" height="330" />
</div>
</div>
',
                'home_seo' => '{"meta_title": "Demo store", "meta_keywords": "Demo store meta keyword", "meta_description": "Demo store meta description"}',
                'id' => 2,
                'locale' => 'fr',
                'maintenance_mode_text' => NULL,
                'name' => 'Default',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'channel_id' => 1,
                'created_at' => NULL,
                'description' => NULL,
                'footer_content' => '
<div class="list-container">
<span class="list-heading">Quick Links</span>
<ul class="list-group">
<li><a href="@php echo route(\'shop.cms.page\', \'about-us\') @endphp">About Us</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'return-policy\') @endphp">Return Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp">Refund Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp">Terms and conditions</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp">Terms of Use</a></li><li><a href="@php echo route(\'shop.cms.page\', \'contact-us\') @endphp">Contact Us</a></li>
</ul>
</div>
<div class="list-container">
<span class="list-heading">Connect With Us</span>
<ul class="list-group">
<li><a href="#"><span class="icon icon-facebook"></span>Facebook </a></li>
<li><a href="#"><span class="icon icon-twitter"></span> Twitter </a></li>
<li><a href="#"><span class="icon icon-instagram"></span> Instagram </a></li>
<li><a href="#"> <span class="icon icon-google-plus"></span>Google+ </a></li>
<li><a href="#"> <span class="icon icon-linkedin"></span>LinkedIn </a></li>
</ul>
</div>
',
                'home_page_content' => '
<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p>
<div class="banner-container">
<div class="left-banner">
<img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class="lazyload" alt="test" width="720" height="720" />
</div>
<div class="right-banner">
<img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class="lazyload" alt="test" width="460" height="330" />
<img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class="lazyload" alt="test" width="460" height="330" />
</div>
</div>
',
                'home_seo' => '{"meta_title": "Demo store", "meta_keywords": "Demo store meta keyword", "meta_description": "Demo store meta description"}',
                'id' => 3,
                'locale' => 'nl',
                'maintenance_mode_text' => NULL,
                'name' => 'Default',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'channel_id' => 1,
                'created_at' => NULL,
                'description' => NULL,
                'footer_content' => '
<div class="list-container">
<span class="list-heading">Quick Links</span>
<ul class="list-group">
<li><a href="@php echo route(\'shop.cms.page\', \'about-us\') @endphp">About Us</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'return-policy\') @endphp">Return Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp">Refund Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp">Terms and conditions</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp">Terms of Use</a></li><li><a href="@php echo route(\'shop.cms.page\', \'contact-us\') @endphp">Contact Us</a></li>
</ul>
</div>
<div class="list-container">
<span class="list-heading">Connect With Us</span>
<ul class="list-group">
<li><a href="#"><span class="icon icon-facebook"></span>Facebook </a></li>
<li><a href="#"><span class="icon icon-twitter"></span> Twitter </a></li>
<li><a href="#"><span class="icon icon-instagram"></span> Instagram </a></li>
<li><a href="#"> <span class="icon icon-google-plus"></span>Google+ </a></li>
<li><a href="#"> <span class="icon icon-linkedin"></span>LinkedIn </a></li>
</ul>
</div>
',
                'home_page_content' => '
<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p>
<div class="banner-container">
<div class="left-banner">
<img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class="lazyload" alt="test" width="720" height="720" />
</div>
<div class="right-banner">
<img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class="lazyload" alt="test" width="460" height="330" />
<img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class="lazyload" alt="test" width="460" height="330" />
</div>
</div>
',
                'home_seo' => '{"meta_title": "Demo store", "meta_keywords": "Demo store meta keyword", "meta_description": "Demo store meta description"}',
                'id' => 4,
                'locale' => 'tr',
                'maintenance_mode_text' => NULL,
                'name' => 'Default',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'channel_id' => 1,
                'created_at' => NULL,
                'description' => NULL,
                'footer_content' => '
<div class="list-container">
<span class="list-heading">Quick Links</span>
<ul class="list-group">
<li><a href="@php echo route(\'shop.cms.page\', \'about-us\') @endphp">About Us</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'return-policy\') @endphp">Return Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp">Refund Policy</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp">Terms and conditions</a></li>
<li><a href="@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp">Terms of Use</a></li><li><a href="@php echo route(\'shop.cms.page\', \'contact-us\') @endphp">Contact Us</a></li>
</ul>
</div>
<div class="list-container">
<span class="list-heading">Connect With Us</span>
<ul class="list-group">
<li><a href="#"><span class="icon icon-facebook"></span>Facebook </a></li>
<li><a href="#"><span class="icon icon-twitter"></span> Twitter </a></li>
<li><a href="#"><span class="icon icon-instagram"></span> Instagram </a></li>
<li><a href="#"> <span class="icon icon-google-plus"></span>Google+ </a></li>
<li><a href="#"> <span class="icon icon-linkedin"></span>LinkedIn </a></li>
</ul>
</div>
',
                'home_page_content' => '
<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p>
<div class="banner-container">
<div class="left-banner">
<img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class="lazyload" alt="test" width="720" height="720" />
</div>
<div class="right-banner">
<img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class="lazyload" alt="test" width="460" height="330" />
<img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class="lazyload" alt="test" width="460" height="330" />
</div>
</div>
',
                'home_seo' => '{"meta_title": "Demo store", "meta_keywords": "Demo store meta keyword", "meta_description": "Demo store meta description"}',
                'id' => 5,
                'locale' => 'es',
                'maintenance_mode_text' => NULL,
                'name' => 'Default',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}