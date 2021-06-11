<product-collections
    product-title="<?php echo e(__('shop::app.home.featured-products')); ?>"
    product-route="<?php echo e(route('velocity.category.details', ['category-slug' => $category])); ?>"
    locale-direction="<?php echo e(core()->getCurrentLocale()->direction == 'rtl' ? 'rtl' : 'ltr'); ?>">
</product-collections><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/home/category.blade.php ENDPATH**/ ?>