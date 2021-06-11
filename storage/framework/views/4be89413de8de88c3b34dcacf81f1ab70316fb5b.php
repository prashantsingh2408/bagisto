<?php
    $count = core()->getConfigData('catalog.products.homepage.no_of_featured_product_homepage');
    $count = $count ? $count : 10;
    $direction = core()->getCurrentLocale()->direction == 'rtl' ? 'rtl' : 'ltr';
?>

<product-collections
    product-id="fearured-products-carousel"
    product-title="<?php echo e(__('shop::app.home.featured-products')); ?>"
    product-route="<?php echo e(route('velocity.category.details', ['category-slug' => 'featured-products', 'count' => $count])); ?>"
    locale-direction="<?php echo e($direction); ?>"
    count="<?php echo e((int) $count); ?>">
</product-collections><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/home/featured-products.blade.php ENDPATH**/ ?>