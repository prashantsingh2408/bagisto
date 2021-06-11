<?php if(
    $velocityMetaData
    && $velocityMetaData->subscription_bar_content
    || core()->getConfigData('customer.settings.newsletter.subscription')
): ?>
    <div class="newsletter-subscription">
        <div class="newsletter-wrapper row col-12">
            <?php if($velocityMetaData && $velocityMetaData->subscription_bar_content): ?>
                <?php echo $velocityMetaData->subscription_bar_content; ?>

            <?php endif; ?>

            <?php if(core()->getConfigData('customer.settings.newsletter.subscription')): ?>
                <div class="subscribe-newsletter col-lg-6">
                    <div class="form-container">
                        <form action="<?php echo e(route('shop.subscribe')); ?>">
                            <div class="subscriber-form-div">
                                <div class="control-group">
                                    <input
                                        type="email"
                                        name="subscriber_email"
                                        class="control subscribe-field"
                                        placeholder="<?php echo e(__('velocity::app.customer.login-form.your-email-address')); ?>"
                                        aria-label="Newsletter"
                                        required />

                                    <button class="theme-btn subscribe-btn fw6">
                                        <?php echo e(__('shop::app.subscription.subscribe')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/layouts/footer/newsletter-subscription.blade.php ENDPATH**/ ?>