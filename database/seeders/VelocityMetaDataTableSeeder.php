<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VelocityMetaDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('velocity_meta_data')->delete();
        
        \DB::table('velocity_meta_data')->insert(array (
            0 => 
            array (
                'advertisement' => '{"2": {"1": "velocity/images/lG4BVFWUTYB9FlzjaDL062LltD7ljctsQA2YjTlV.jpg", "2": "velocity/images/MkElJxczhyhMuWNBzIVavbwQsAgGten4wrUAzj2K.jpg"}, "3": {"5": "velocity/images/4IO3vmAVtw2vB1Wq6R7KVWqpRwdhZkekfSQVSmnH.jpg", "6": "velocity/images/IYaYPIWHQzZQNmAV7xC6Efh5hJthZwmO0IcOmoVG.jpg", "7": "velocity/images/SKzx8zo5OL4KQb07KL2iespN71pFmLxrBEwcQN08.jpg"}, "4": {"4": "velocity/images/ma5Rnco7v2KrUHz3YKE7RX2ZrXSm5fRctCttzo30.jpg", "5": "velocity/images/ECnrULPYnG6aCaHuJ93X0DcZ9L6XgKCb70njEl96.jpg", "6": "velocity/images/CDYdWLnoY2Hf5qXc7u8b5ImJ7qzUjYcmMK3rAhdc.jpg", "7": "velocity/images/jVbo3QEIOr9fiean3tHg7KQ2UlxAENe6eHR62mDM.jpg"}}',
                'channel' => 'default',
                'created_at' => NULL,
                'featured_product_count' => 10,
                'footer_left_content' => '',
                'footer_middle_content' => '<p></p>
<!--<div class="col-sm-7 col-lg-3">
<div class="single-widget">
<h2>About Shop</h2>
<ul class="list-unstyle">
<li><a href="#">Company Information</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Store Location</a></li>
<li><a href="#">Copyright</a></li>
</ul>
</div>
</div>
<div class="col-sm-7 col-lg-3">
<div class="single-widget">
<h2>Grocery Income</h2>
<address>ABC Street, XYZ Building<br /> Sector 3, Noida - 201301</address><a><i class="fa fa-phone"></i> 123-456-7890</a><br /> <a><i class="fa fa-envelope"></i> Email@gmail.com</a></div>
</div>
-->
<div class="col-lg-6 col-md-12 col-sm-12 no-padding">
<ul type="none">
<li><a href="{!! url(\'page/about-us\') !!}">About Us</a></li>
<li><a href="{!! url(\'page/cutomer-service\') !!}">Customer Service</a></li>
<li><a href="{!! url(\'page/whats-new\') !!}">What&rsquo;s New</a></li>
<li><a href="{!! url(\'page/contact-us\') !!}">Contact Us </a></li>
</ul>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 no-padding">
<ul type="none">
<li><a href="{!! url(\'page/return-policy\') !!}"> Order and Returns </a></li>
<li><a href="{!! url(\'page/payment-policy\') !!}"> Payment Policy </a></li>
<li><a href="{!! url(\'page/shipping-policy\') !!}"> Shipping Policy</a></li>
<li><a href="{!! url(\'page/privacy-policy\') !!}"> Privacy and Cookies Policy </a></li>
</ul>
</div>
<p></p>',
                'header_content_count' => '8',
            'home_page_content' => '<p>@include(\'shop::home.category\', [\'category\' => \'show-by-category\'])</p>
<p>@include(\'shop::home.advertisements.advertisement-three\')</p>
<p>@include(\'shop::home.featured-products\')</p>
<p>@include(\'shop::home.category\', [\'category\' => \'show-by-brands\'])</p>
<p>@include(\'shop::home.advertisements.advertisement-four\')&nbsp;</p>
<p>@include(\'shop::home.new-products\')</p>
<p>@include(\'shop::home.product-policy\')</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>',
                'id' => 1,
                'locale' => 'en',
                'new_products_count' => 10,
                'product_policy' => '<div class="row col-12 remove-padding-margin">
<div class="col-lg-4 col-sm-12 product-policy-wrapper">
<div class="card">
<div class="policy">
<div class="left"><i class="rango-van-ship fs40"></i></div>
<div class="right"><span class="font-setting fs20">Free Shipping on Order $20 or More</span></div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12 product-policy-wrapper">
<div class="card">
<div class="policy">
<div class="left"><i class="rango-exchnage fs40"></i></div>
<div class="right"><span class="font-setting fs20">Product Replace &amp; Return Available </span></div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12 product-policy-wrapper">
<div class="card">
<div class="policy">
<div class="left"><i class="rango-exchnage fs40"></i></div>
<div class="right"><span class="font-setting fs20">Product Exchange and EMI Available </span></div>
</div>
</div>
</div>
</div>',
                'product_view_images' => NULL,
                'sidebar_category_count' => 9,
                'slider' => 1,
                'subscription_bar_content' => '',
                'updated_at' => '2021-03-23 18:03:47',
            ),
        ));
        
        
    }
}