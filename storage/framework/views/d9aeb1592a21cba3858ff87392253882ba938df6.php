<?php $toolbarHelper = app('Webkul\Product\Helpers\Toolbar'); ?>



<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.customer.account.wishlist.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-detail-wrapper'); ?>
    <div class="account-head">
        <span class="account-heading"><?php echo e(__('shop::app.customer.account.wishlist.title')); ?></span>

        <?php if(count($items)): ?>
            <div class="account-action float-right">
                <a
                    class="remove-decoration theme-btn light"
                    href="<?php echo e(route('customer.wishlist.removeall')); ?>">
                    <?php echo e(__('shop::app.customer.account.wishlist.deleteall')); ?>

                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.wishlist.list.before', ['wishlist' => $items]); ?>


    <div class="wishlist-container">

        <?php if($items->count()): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $currentMode = $toolbarHelper->getCurrentMode();
                    $moveToCartText = __('shop::app.customer.account.wishlist.move-to-cart');
                ?>

                <?php echo $__env->make('shop::products.list.card', [
                    'list'                 => true,
                    'checkmode'            => true,
                    'moveToCart'           => true,
                    'wishlistMoveRoute'    => route('customer.wishlist.move', $item->id),
                    'addToCartForm'        => true,
                    'removeWishlist'       => true,
                    'reloadPage'           => true,
                    'itemId'               => $item->id,
                    'item'                 => $item,
                    'product'              => $item->product,
                    'additionalAttributes' => true,
                    'btnText'              => $moveToCartText,
                    'addToCartBtnClass'    => 'small-padding',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div>
                <?php echo e($items->links()); ?>

            </div>
        <?php else: ?>
            <div class="empty">
                <?php echo e(__('customer::app.wishlist.empty')); ?>

            </div>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.wishlist.list.after', ['wishlist' => $items]); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/wishlist/wishlist.blade.php ENDPATH**/ ?>