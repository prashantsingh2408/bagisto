<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.customer.account.address.index.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-detail-wrapper'); ?>
    <?php if($addresses->isEmpty()): ?>

        <a href="<?php echo e(route('customer.address.create')); ?>" class="theme-btn light unset address-button">

            <?php echo e(__('shop::app.customer.account.address.index.add')); ?>

        </a>
    <?php endif; ?>

    <div class="account-head">
        <span class="back-icon"><a href="<?php echo e(route('customer.account.index')); ?>"><i class="icon icon-menu-back"></i></a></span>
        <span class="account-heading"><?php echo e(__('shop::app.customer.account.address.index.title')); ?></span>

        <?php if(! $addresses->isEmpty()): ?>
            <span class="account-action">
                <a href="<?php echo e(route('customer.address.create')); ?>" class="theme-btn light unset float-right">
                    <?php echo e(__('shop::app.customer.account.address.index.add')); ?>

                </a>
            </span>
        <?php endif; ?>

        <div class="horizontal-rule"></div>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.address.list.before', ['addresses' => $addresses]); ?>


        <div class="account-table-content">
            <?php if($addresses->isEmpty()): ?>
                <div><?php echo e(__('shop::app.customer.account.address.index.empty')); ?></div>
            <?php else: ?>
                <div class="address-holder col-12 no-padding">
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw6"><?php echo e($address->first_name); ?> <?php echo e($address->last_name); ?></h5>

                                    <ul type="none">
                                        
                                        <li><?php echo e($address->address1); ?>,</li>
                                        <li><?php echo e($address->city); ?>,</li>
                                        <li><?php echo e($address->state); ?>,</li>
                                        <li><?php echo e(core()->country_name($address->country)); ?> <?php echo e($address->postcode); ?></li>
                                        <li>
                                            <?php echo e(__('shop::app.customer.account.address.index.contact')); ?> : <?php echo e($address->phone); ?>

                                        </li>
                                    </ul>

                                    <a class="card-link" href="<?php echo e(route('customer.address.edit', $address->id)); ?>">
                                        <?php echo e(__('shop::app.customer.account.address.index.edit')); ?>

                                    </a>

                                    <a
                                        class="card-link"
                                        href="<?php echo e(route('address.delete', $address->id)); ?>"
                                        onclick="deleteAddress('<?php echo e(__('shop::app.customer.account.address.index.confirm-delete')); ?>')">

                                        <?php echo e(__('shop::app.customer.account.address.index.delete')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

    <?php echo view_render_event('bagisto.shop.customers.account.address.list.after', ['addresses' => $addresses]); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function deleteAddress(message) {
            if (!confirm(message))
            event.preventDefault();
        }
    </script>
<?php $__env->stopPush(); ?>

<?php if($addresses->isEmpty()): ?>
    <style>
        a#add-address-button {
            position: absolute;
            margin-top: 92px;
        }

        .address-button {
            position: absolute;
            z-index: 1 !important;
            margin-top: 110px !important;
        }
    </style>
<?php endif; ?>

<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/address/index.blade.php ENDPATH**/ ?>