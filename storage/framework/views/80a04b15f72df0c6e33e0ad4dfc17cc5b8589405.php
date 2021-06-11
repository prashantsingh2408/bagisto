<?php $__env->startSection('content-wrapper'); ?>
<div class="account-content row no-margin velocity-divide-page">
  <div class="sidebar left">
    <?php echo $__env->make('shop::customers.account.partials.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

  <div class="account-layout right mt10">
    <?php echo $__env->yieldContent('page-detail-wrapper'); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
  $(document).ready(function() {
    window.updateHeight = () => {
      setTimeout(() => {
        let sidebarHeight = $('.customer-sidebar').css('height');
        let contentHeight = $('.account-layout').css('height');

        sidebarHeight = parseInt(sidebarHeight.substring(0, sidebarHeight.length - 2));
        contentHeight = parseInt(contentHeight.substring(0, contentHeight.length - 2));

        let height = sidebarHeight > contentHeight ? sidebarHeight : contentHeight;
        height = (height + 30) + "px";

        $('.account-content').css('height', height);
      }, 0);
    }

    window.updateHeight();

    $('input, select').change(() => {
      window.updateHeight();
    });

    $('button').click(() => {
      window.updateHeight();
    });

    $('.accordian-header').click(window.updateHeight);
  });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/index.blade.php ENDPATH**/ ?>