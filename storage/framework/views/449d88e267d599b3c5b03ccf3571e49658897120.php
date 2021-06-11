<?php if(core()->getConfigData('customer.settings.social_login.enable_facebook')
    || core()->getConfigData('customer.settings.social_login.enable_twitter')
    || core()->getConfigData('customer.settings.social_login.enable_google')
    || core()->getConfigData('customer.settings.social_login.enable_linkedin')
    || core()->getConfigData('customer.settings.social_login.enable_github')
): ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(bagisto_asset('css/social-login.css')); ?>">
<?php $__env->stopPush(); ?>

<div class="social-login-links">
    <?php if(core()->getConfigData('customer.settings.social_login.enable_facebook')): ?>
        <div class="control-group">
            <a href="<?php echo e(route('customer.social-login.index', 'facebook')); ?>" class="link facebook-link">
                <span class="icon icon-facebook-login"></span>
                <?php echo e(__('sociallogin::app.shop.customer.login-form.continue-with-facebook')); ?>

            </a>
        </div>
    <?php endif; ?>

    <?php if(core()->getConfigData('customer.settings.social_login.enable_twitter')): ?>
        <div class="control-group">
            <a href="<?php echo e(route('customer.social-login.index', 'twitter')); ?>" class="link twitter-link">
                <span class="icon icon-twitter-login"></span>
                <?php echo e(__('sociallogin::app.shop.customer.login-form.continue-with-twitter')); ?>

            </a>
        </div>
    <?php endif; ?>

    <?php if(core()->getConfigData('customer.settings.social_login.enable_google')): ?>
        <div class="control-group">
            <a href="<?php echo e(route('customer.social-login.index', 'google')); ?>" class="link google-link">
                <span class="icon icon-google-login"></span>
                <?php echo e(__('sociallogin::app.shop.customer.login-form.continue-with-google')); ?>

            </a>
        </div>
    <?php endif; ?>

    <?php if(core()->getConfigData('customer.settings.social_login.enable_linkedin')): ?>
        <div class="control-group">
            <a href="<?php echo e(route('customer.social-login.index', 'linkedin')); ?>" class="link linkedin-link">
                <span class="icon icon-linkedin-login"></span>
                <?php echo e(__('sociallogin::app.shop.customer.login-form.continue-with-linkedin')); ?>

            </a>
        </div>
    <?php endif; ?>

    <?php if(core()->getConfigData('customer.settings.social_login.enable_github')): ?>
        <div class="control-group">
            <a href="<?php echo e(route('customer.social-login.index', 'github')); ?>" class="link github-link">
                <span class="icon icon-github-login"></span>
                <?php echo e(__('sociallogin::app.shop.customer.login-form.continue-with-github')); ?>

            </a>
        </div>
    <?php endif; ?>
</div>

<div class="social-link-seperator">
    <span><?php echo e(__('sociallogin::app.shop.customer.login-form.or')); ?></span>
</div>
<?php endif; ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/packages/Webkul/SocialLogin/src/Providers/../Resources/views/shop/customers/session/social-links.blade.php ENDPATH**/ ?>