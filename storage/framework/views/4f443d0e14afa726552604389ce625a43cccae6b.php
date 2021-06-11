<div class="col-lg-4 col-md-12 col-sm-12 footer-rt-content">
    <div class="row">
        <div class="mb5 col-12">
            <h3><?php echo e(__('velocity::app.home.payment-methods')); ?></h3>
        </div>

        <div class="payment-methods col-12">
            <?php $__currentLoopData = \Webkul\Payment\Facades\Payment::getPaymentMethods(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="method-sticker">
                    <?php echo e($method['method_title']); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="row">
        <div class="mb5 col-12">
            <h3><?php echo e(__('velocity::app.home.shipping-methods')); ?></h3>
        </div>

        <div class="shipping-methods col-12">
            <?php $__currentLoopData = \Webkul\Shipping\Facades\Shipping::getShippingMethods(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="method-sticker">
                    <?php echo e($method['method_title']); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/layouts/footer/footer-links/footer-right.blade.php ENDPATH**/ ?>