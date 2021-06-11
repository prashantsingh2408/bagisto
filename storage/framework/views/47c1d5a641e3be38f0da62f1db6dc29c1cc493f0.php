<?php echo $__env->make('velocity::guest.compare.compare-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('velocity::app.customer.compare.compare_similar_items')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .compare-products .col, .compare-products .col-2 {
            max-width: 25%;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('page-detail-wrapper'); ?>
    <compare-product></compare-product>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/compare/index.blade.php ENDPATH**/ ?>