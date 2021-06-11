<?php
    $isRendered = false;
    $advertisementFour = null;
?>

<?php if($velocityMetaData && $velocityMetaData->advertisement): ?>
    <?php
        $advertisement = json_decode($velocityMetaData->advertisement, true);
        
        if (isset($advertisement[4]) && is_array($advertisement[4])) {
            $advertisementFour = array_values(array_filter($advertisement[4]));
        }
    ?>

    <?php if($advertisementFour): ?>
        <?php
            $isRendered = true;
        ?>

        <div class="container-fluid advertisement-four-container">
            <div class="row">
                <?php if( isset($advertisementFour[0])): ?>
                    <a <?php if(isset($one)): ?> href="<?php echo e($one); ?>" <?php endif; ?> class="col-lg-4 col-12 no-padding" aria-label="Advertisement">
                        <img class="col-12 lazyload" data-src="<?php echo e(asset('/storage/' . $advertisementFour[0])); ?>" alt="" />
                    </a>
                <?php endif; ?>

                <div class="col-lg-4 col-12 offers-ct-panel">
                    <?php if( isset($advertisementFour[1])): ?>
                        <a <?php if(isset($two)): ?> href="<?php echo e($two); ?>" <?php endif; ?> class="row col-12 remove-padding-margin" aria-label="Advertisement">
                            <img class="col-12 offers-ct-top lazyload" data-src="<?php echo e(asset('/storage/' . $advertisementFour[1])); ?>" alt="" />
                        </a>
                    <?php endif; ?>

                    <?php if( isset($advertisementFour[2])): ?>
                        <a <?php if(isset($three)): ?> href="<?php echo e($three); ?>" <?php endif; ?> class="row col-12 remove-padding-margin" aria-label="Advertisement">
                            <img class="col-12 offers-ct-bottom lazyload" data-src="<?php echo e(asset('/storage/' . $advertisementFour[2])); ?>" alt="" />
                        </a>
                    <?php endif; ?>
                </div>

                <?php if( isset($advertisementFour[3])): ?>
                    <a <?php if(isset($four)): ?> href="<?php echo e($four); ?>" <?php endif; ?> class="col-lg-4 col-12 no-padding" aria-label="Advertisement">
                        <img class="col-12 lazyload" data-src="<?php echo e(asset('/storage/' . $advertisementFour[3])); ?>" alt="" />
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if(! $isRendered): ?>
    <div class="container-fluid advertisement-four-container">
        <div class="row">
            <a <?php if(isset($one)): ?> href="<?php echo e($one); ?>" <?php endif; ?> class="col-lg-4 col-12 no-padding" aria-label="Advertisement">
                <img class="col-12 lazyload" data-src="<?php echo e(asset('/themes/velocity/assets/images/big-sale-banner.webp')); ?>" alt="" />
            </a>

            <div class="col-lg-4 col-12 offers-ct-panel">
                <a <?php if(isset($two)): ?> href="<?php echo e($two); ?>" <?php endif; ?> class="row col-12 remove-padding-margin" aria-label="Advertisement">
                    <img class="col-12 offers-ct-top lazyload" data-src="<?php echo e(asset('/themes/velocity/assets/images/seasons.webp')); ?>" alt="" />
                </a>
                <a <?php if(isset($three)): ?> href="<?php echo e($three); ?>" <?php endif; ?> class="row col-12 remove-padding-margin" aria-label="Advertisement">
                    <img class="col-12 offers-ct-bottom lazyload" data-src="<?php echo e(asset('/themes/velocity/assets/images/deals.webp')); ?>" alt="" />
                </a>
            </div>

            <a <?php if(isset($four)): ?> href="<?php echo e($four); ?>" <?php endif; ?> class="col-lg-4 col-12 no-padding" aria-label="Advertisement">
                <img class="col-12 lazyload" data-src="<?php echo e(asset('/themes/velocity/assets/images/kids.webp')); ?>" alt="" />
            </a>
        </div>
    </div>
<?php endif; ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/home/advertisements/advertisement-four.blade.php ENDPATH**/ ?>