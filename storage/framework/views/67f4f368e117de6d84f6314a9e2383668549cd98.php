<?php
    $direction = core()->getCurrentLocale()->direction;
?>

<?php if($velocityMetaData && $velocityMetaData->slider): ?>
    <slider-component direction="<?php echo e($direction); ?>"></slider-component>
<?php endif; ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/x-template" id="slider-template">
        <div class="slides-container <?php echo e($direction); ?>">
            <carousel-component
                loop="true"
                timeout="5000"
                autoplay="true"
                slides-per-page="1"
                navigation-enabled="hide"
                :locale-direction="direction"
                :slides-count="<?php echo e(! empty($sliderData) ? sizeof($sliderData) : 1); ?>">

                <?php if(! empty($sliderData)): ?>
                    <?php $__currentLoopData = $sliderData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php
                        $textContent = str_replace("\r\n", '', $slider['content']);
                    ?>
                        <slide slot="slide-<?php echo e($index); ?>" title=" ">
                            <a <?php if($slider['slider_path']): ?> href="<?php echo e($slider['slider_path']); ?>" <?php endif; ?>>
                                <img
                                    class="col-12 no-padding banner-icon"
                                    src="<?php echo e(url()->to('/') . '/storage/' . $slider['path']); ?>" />

                                <div class="show-content" v-html="'<?php echo e($textContent); ?>'">
                                </div>
                            </a>
                        </slide>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <slide slot="slide-0">
                        <img
                            loading="lazy"
                            class="col-12 no-padding banner-icon"
                            src="<?php echo e(asset('/themes/velocity/assets/images/banner.webp')); ?>"
                            alt=""/>
                    </slide>
                <?php endif; ?>

            </carousel-component>
        </div>
    </script>

    <script type='text/javascript'>
        (() => {
            Vue.component('slider-component', {
                template: '#slider-template',
                props: ['direction'],

                mounted: function () {
                    let banners = this.$el.querySelectorAll('img');
                    banners.forEach(banner => {
                        banner.style.display = 'block';
                    });
                }
            })
        })()
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/home/slider.blade.php ENDPATH**/ ?>