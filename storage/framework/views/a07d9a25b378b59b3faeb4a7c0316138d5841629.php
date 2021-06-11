<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.customer.account.order.index.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-detail-wrapper'); ?>
    <div class="account-head mb-10">
        <span class="back-icon">
            <a href="<?php echo e(route('customer.account.index')); ?>">
                <i class="icon icon-menu-back"></i>
            </a>
        </span>

        <span class="account-heading">
            <?php echo e(__('shop::app.customer.account.order.index.title')); ?>

        </span>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.orders.list.before'); ?>


        <div class="account-items-list">
            <div class="account-table-content">

                <?php echo app('Webkul\Shop\DataGrids\OrderDataGrid')->render(); ?>


            </div>
        </div>

    <?php echo view_render_event('bagisto.shop.customers.account.orders.list.after'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/orders/index.blade.php ENDPATH**/ ?>