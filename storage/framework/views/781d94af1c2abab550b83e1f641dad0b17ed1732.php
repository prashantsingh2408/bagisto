<?php echo view_render_event('bagisto.shop.products.add_to_cart.before', ['product' => $product]); ?>


    <div class="mx-0 no-padding">
        <?php if(isset($showCompare) && $showCompare): ?>
            <compare-component
                <?php if(auth()->guard('customer')->check()): ?>
                    customer="true"
                <?php endif; ?>

                <?php if(auth()->guard('customer')->guest()): ?>
                    customer="false"
                <?php endif; ?>

                slug="<?php echo e($product->url_key); ?>"
                product-id="<?php echo e($product->id); ?>"
                add-tooltip="<?php echo e(__('velocity::app.customer.compare.add-tooltip')); ?>"
            ></compare-component>
        <?php endif; ?>

        <?php if(! (isset($showWishlist) && !$showWishlist) && core()->getConfigData('general.content.shop.wishlist_option')): ?>
            <?php echo $__env->make('shop::products.wishlist', [
                'addClass' => $addWishlistClass ?? ''
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="add-to-cart-btn pl0">
            <?php if(isset($form) && !$form): ?>
                <button
                    type="submit"
                    <?php echo e(! $product->isSaleable() ? 'disabled' : ''); ?>

                    class="theme-btn <?php echo e($addToCartBtnClass ?? ''); ?>">

                    <?php if(! (isset($showCartIcon) && !$showCartIcon)): ?>
                        <i class="material-icons text-down-3">shopping_cart</i>
                    <?php endif; ?>

                    <?php echo e(($product->type == 'booking') ?  __('shop::app.products.book-now') :  __('shop::app.products.add-to-cart')); ?>

                </button>
            <?php elseif(isset($addToCartForm) && !$addToCartForm): ?>
                <form
                    method="POST"
                    action="<?php echo e(route('cart.add', $product->product_id)); ?>">

                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
                    <input type="hidden" name="quantity" value="1">
                    <button
                        type="submit"
                        <?php echo e(! $product->isSaleable() ? 'disabled' : ''); ?>

                        class="btn btn-add-to-cart <?php echo e($addToCartBtnClass ?? ''); ?>">

                        <?php if(! (isset($showCartIcon) && !$showCartIcon)): ?>
                            <i class="material-icons text-down-3">shopping_cart</i>
                        <?php endif; ?>

                        <span class="fs14 fw6 text-uppercase text-up-4">
                            <?php echo e(($product->type == 'booking') ?  __('shop::app.products.book-now') : $btnText ?? __('shop::app.products.add-to-cart')); ?>

                        </span>
                    </button>
                </form>
            <?php else: ?>
                <add-to-cart
                    form="true"
                    csrf-token='<?php echo e(csrf_token()); ?>'
                    product-flat-id="<?php echo e($product->id); ?>"
                    product-id="<?php echo e($product->product_id); ?>"
                    reload-page="<?php echo e($reloadPage ?? false); ?>"
                    move-to-cart="<?php echo e($moveToCart ?? false); ?>"
                    wishlist-move-route="<?php echo e($wishlistMoveRoute ?? false); ?>"
                    add-class-to-btn="<?php echo e($addToCartBtnClass ?? ''); ?>"
                    is-enable=<?php echo e(! $product->isSaleable() ? 'false' : 'true'); ?>

                    show-cart-icon=<?php echo e(! (isset($showCartIcon) && ! $showCartIcon)); ?>

                    btn-text="<?php echo e((! isset($moveToCart) && $product->type == 'booking') ?  __('shop::app.products.book-now') : $btnText ?? __('shop::app.products.add-to-cart')); ?>">
                </add-to-cart>
            <?php endif; ?>
        </div>
    </div>

<?php echo view_render_event('bagisto.shop.products.add_to_cart.after', ['product' => $product]); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/products/add-to-cart.blade.php ENDPATH**/ ?>