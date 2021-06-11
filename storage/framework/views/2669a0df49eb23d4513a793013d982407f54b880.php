<div class="mini-cart-container">
    <mini-cart
        view-cart="<?php echo e(route('shop.checkout.cart.index')); ?>"
        cart-text="<?php echo e(__('shop::app.minicart.view-cart')); ?>"
        checkout-text="<?php echo e(__('shop::app.minicart.checkout')); ?>"
        checkout-url="<?php echo e(route('shop.checkout.onepage.index')); ?>"
        subtotal-text="<?php echo e(__('shop::app.checkout.cart.cart-subtotal')); ?>"
        check-minimum-order-url="<?php echo e(route('shop.checkout.check-minimum-order')); ?>">
    </mini-cart>
</div><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/checkout/cart/mini-cart.blade.php ENDPATH**/ ?>