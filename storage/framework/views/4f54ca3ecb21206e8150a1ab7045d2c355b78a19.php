<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.customer.account.review.index.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-detail-wrapper'); ?>
    <div class="reviews-head mb20">
        <span class="back-icon">
            <a href="<?php echo e(route('customer.account.index')); ?>">
                <i class="icon icon-menu-back"></i>
            </a>
        </span>

        <span class="account-heading"><?php echo e(__('shop::app.customer.account.review.index.title')); ?></span>

        <?php if(count($reviews) > 1): ?>
            <div class="account-action float-right">
                <a href="<?php echo e(route('customer.review.deleteall')); ?>" class="theme-btn light unset">
                    <?php echo e(__('shop::app.customer.account.wishlist.deleteall')); ?>

                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.reviews.list.before', ['reviews' => $reviews]); ?>


    <div class="reviews-container">
        <?php if(! $reviews->isEmpty()): ?>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row col-12 fs16">
                    <div class="col-12 row">
                        <?php
                            $image = productimage()->getProductBaseImage($review->product);
                        ?>

                        <a
                            href="<?php echo e(url()->to('/').'/'.$review->product->url_key); ?>"
                            title="<?php echo e($review->product->name); ?>"
                            class="col-2 max-sm-img-dimention no-padding">
                            <img class="media" src="<?php echo e($image['small_image_url']); ?>" alt=""/>
                        </a>

                        <div class="col-8">
                            <div class="product-name">
                                <a
                                    class="remove-decoration"
                                    href="<?php echo e(url()->to('/').'/'.$review->product->url_key); ?>"
                                    title="<?php echo e($review->product->name); ?>">
                                    <?php echo e($review->product->name); ?>

                                </a>
                            </div>

                            <star-ratings ratings="<?php echo e($review->rating); ?>"></star-ratings>

                            <h5 class="fw6"><?php echo e($review->title); ?></h5>

                            <p><?php echo e($review->comment); ?></p>
                        </div>

                        <div class="col-2">
                            <a class="unset" href="<?php echo e(route('customer.review.delete', $review->id)); ?>">
                                <span class="rango-delete fs24"></span>
                                <span class="align-vertical-top"><?php echo e(__('shop::app.checkout.cart.remove')); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="bottom-toolbar">
                <?php echo e($reviews->links()); ?>

            </div>
            
        <?php else: ?>
            <div class="fs16">
                <?php echo e(__('customer::app.reviews.empty')); ?>

            </div>
        <?php endif; ?>

    </div>

    <?php echo view_render_event('bagisto.shop.customers.account.reviews.list.after', ['reviews' => $reviews]); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/x-template" id="load-more-template">
        <div class="col-12 row justify-content-center">
            <button type="button" class="theme-btn light" @click="loadNextPage">Load More</button>
        </div>
    </script>

    <script type="text/javascript">
        (() => {
            Vue.component('load-more-btn', {
                template: '#load-more-template',

                methods: {
                    'loadNextPage': function () {
                        let splitedParamsObject = {};

                        let searchedString = window.location.search;
                        searchedString = searchedString.replace('?', '');

                        let splitedParams = searchedString.split('&');

                        splitedParams.forEach(value => {
                            let splitedValue = value.split('=');
                            splitedParamsObject[splitedValue[0]] = splitedValue[1];
                        });

                        splitedParamsObject[page]
                    }
                }
            })
        })()
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/reviews/index.blade.php ENDPATH**/ ?>