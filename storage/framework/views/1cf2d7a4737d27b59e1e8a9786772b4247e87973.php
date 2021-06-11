<link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/bootstrap.min.css')); ?>" />

<?php if(core()->getCurrentLocale() && core()->getCurrentLocale()->direction == 'rtl'): ?>
    <link href="<?php echo e(asset('themes/velocity/assets/css/bootstrap-flipped.css')); ?>" rel="stylesheet">
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/velocity.css')); ?>" />

<?php echo $__env->yieldPushContent('css'); ?>

<style>
    <?php echo core()->getConfigData('general.content.custom_scripts.custom_css'); ?>

</style><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/layouts/styles.blade.php ENDPATH**/ ?>