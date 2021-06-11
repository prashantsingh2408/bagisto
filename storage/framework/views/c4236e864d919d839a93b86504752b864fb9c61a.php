<script
    type="text/javascript"
    baseUrl="<?php echo e(url()->to('/')); ?>"
    src="<?php echo e(asset('themes/velocity/assets/js/velocity.js')); ?>">
</script>

<script
    type="text/javascript"
    src="<?php echo e(asset('vendor/webkul/ui/assets/js/ui.js')); ?>">
</script>

<script
    type="text/javascript"
    src="<?php echo e(asset('themes/velocity/assets/js/jquery.ez-plus.js')); ?>">
</script>

<script type="text/javascript">
    (() => {
        window.showAlert = (messageType, messageLabel, message) => {
            if (messageType && message !== '') {
                let alertId = Math.floor(Math.random() * 1000);

                let html = `<div class="alert ${messageType} alert-dismissible" id="${alertId}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>${messageLabel ? messageLabel + '!' : ''} </strong> ${message}.
                </div>`;

                $('#alert-container').append(html).ready(() => {
                    window.setTimeout(() => {
                        $(`#alert-container #${alertId}`).remove();
                    }, 5000);
                });
            }
        }

        let messageType = '';
        let messageLabel = '';

        <?php if($message = session('success')): ?>
            messageType = 'alert-success';
            messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.success')); ?>";
        <?php elseif($message = session('warning')): ?>
            messageType = 'alert-warning';
            messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.warning')); ?>";
        <?php elseif($message = session('error')): ?>
            messageType = 'alert-danger';
            messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.error')); ?>";
        <?php elseif($message = session('info')): ?>
            messageType = 'alert-info';
            messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.info')); ?>";
        <?php endif; ?>

        if (messageType && '<?php echo e($message); ?>' !== '') {
            window.showAlert(messageType, messageLabel, '<?php echo e($message); ?>');
        }

        window.serverErrors = [];
        <?php if(isset($errors)): ?>
            <?php if(count($errors)): ?>
                window.serverErrors = <?php echo json_encode($errors->getMessages(), 15, 512) ?>;
            <?php endif; ?>
        <?php endif; ?>

        window._translations = <?php echo json_encode(app('Webkul\Velocity\Helpers\Helper')->jsonTranslations(), 15, 512) ?>;
    })();
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>

<script>
    <?php echo core()->getConfigData('general.content.custom_scripts.custom_javascript'); ?>

</script><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/layouts/scripts.blade.php ENDPATH**/ ?>