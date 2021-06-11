<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.error.404.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('full-content-wrapper'); ?>
    <div class="error-page row text-center">
        <div class="col-6">
            <div
                class="col-12 bg-image broken-image"
            ></div>

            <div class="col-12 fs24">
                <?php echo e(__('velocity::app.error.page-lost-short')); ?>

            </div>

            <p class="col-12 fs20">
                <?php echo e(__('velocity::app.error.page-lost-description')); ?>

            </p>
        </div>

        <div class="col-6">
            <div class="row">

                <?php if($logo = core()->getCurrentChannel()->logo_url): ?>
                    <div
                        class="col-12 velocity-icon bg-image"
                        style="background-image: url('<?php echo e($logo); ?>')"
                    ></div>
                <?php else: ?>
                    <div class="col-12 velocity-icon bg-image"></div>
                <?php endif; ?>
            </div>

            <a class="row remove-decoration" href="<?php echo e(route('shop.home.index')); ?>">
                <div class="col-12">
                    <span class="custom-circle">></span>
                </div>

                <span class="col-12 fs16">
                    <?php echo e(__('velocity::app.error.go-to-home')); ?>

                </span>
            </a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/errors/404.blade.php ENDPATH**/ ?>