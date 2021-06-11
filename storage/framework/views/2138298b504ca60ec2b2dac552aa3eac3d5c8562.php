<?php
    $count = core()->getConfigData('catalog.products.homepage.no_of_new_product_homepage');
    $count = $count ? $count : 10;
    $direction = core()->getCurrentLocale()->direction == 'rtl' ? 'rtl' : 'ltr';
?>

<?php echo view_render_event('bagisto.shop.new-products.before'); ?>


<product-collections
    count="<?php echo e((int) $count); ?>"
    product-id="new-products-carousel"
    product-title="<?php echo e(__('shop::app.home.new-products')); ?>"
    product-route="<?php echo e(route('velocity.category.details', ['category-slug' => 'new-products', 'count' => $count])); ?>"
    locale-direction="<?php echo e($direction); ?>"
    show-recently-viewed="<?php echo e((Boolean) $showRecentlyViewed ? 'true' : 'false'); ?>"
    recently-viewed-title="<?php echo e(__('velocity::app.products.recently-viewed')); ?>"
    no-data-text="<?php echo e(__('velocity::app.products.not-available')); ?>">
</product-collections>

<?php echo view_render_event('bagisto.shop.new-products.after'); ?>

<?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/home/new-products.blade.php ENDPATH**/ ?>