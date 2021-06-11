<?php $wishListHelper = app('Webkul\Customer\Helpers\Wishlist'); ?>

<?php echo view_render_event('bagisto.shop.products.wishlist.before'); ?>


    <?php if(auth()->guard('customer')->check()): ?>
        <?php
            /* search wishlist on the basis of product's id so that wishlist id can be catched */
            $wishlist = $wishListHelper->getWishlistProduct($product);

            /* link making */
            $href = isset($route) ? $route : ($wishlist ? route('customer.wishlist.remove', $wishlist->id) : route('customer.wishlist.add', $product->product_id));

            /* title */
            $title = $wishlist ? __('velocity::app.shop.wishlist.remove-wishlist-text') : __('velocity::app.shop.wishlist.add-wishlist-text');
        ?>

        <a
            class="unset wishlist-icon <?php echo e($addWishlistClass ?? ''); ?> text-right"
            href="<?php echo e($href); ?>"
            title="<?php echo e($title); ?>">

            <wishlist-component active="<?php echo e($wishlist ? false : true); ?>"></wishlist-component>

            <?php if(isset($text)): ?>
                <?php echo $text; ?>

            <?php endif; ?>
        </a>
    <?php endif; ?>

    <?php if(auth()->guard('customer')->guest()): ?>
        <a
            class="unset wishlist-icon <?php echo e($addWishlistClass ?? ''); ?> text-right"
            href="<?php echo e(route('customer.wishlist.add', $product->product_id)); ?>"
            title="<?php echo e(__('velocity::app.shop.wishlist.add-wishlist-text')); ?>">
            <wishlist-component active="false"></wishlist-component>
        </a>
    <?php endif; ?>

<?php echo view_render_event('bagisto.shop.products.wishlist.after'); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/products/wishlist.blade.php ENDPATH**/ ?>