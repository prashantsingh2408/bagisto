<?php $__env->startSection('page_title'); ?>
<?php echo e(__('shop::app.customer.account.profile.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
  .account-head {
    height: 50px;
  }

</style>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('page-detail-wrapper'); ?>
<div class="account-head mb-0">
  <span class="back-icon">
    <a href="<?php echo e(route('customer.account.index')); ?>">
      <i class="icon icon-menu-back"></i>
    </a>
  </span>
  <span class="account-heading">
    <?php echo e(__('shop::app.customer.account.profile.index.title')); ?>

  </span>

  <span class="account-action">
    <a href="<?php echo e(route('customer.profile.edit')); ?>" class="theme-btn light unset float-right">
      <?php echo e(__('shop::app.customer.account.profile.index.edit')); ?>

    </a>
  </span>
</div>

<?php echo view_render_event('bagisto.shop.customers.account.profile.view.before', ['customer' => $customer]); ?>


<div class="account-table-content profile-page-content">
  <div class="table">
    <table>
      <tbody>
        <?php echo view_render_event(
        'bagisto.shop.customers.account.profile.view.table.before', ['customer' => $customer]); ?>


        <tr>
          <td><?php echo e(__('shop::app.customer.account.profile.fname')); ?></td>
          <td><?php echo e($customer->first_name); ?></td>
        </tr>

        <?php echo view_render_event('bagisto.shop.customers.account.profile.view.table.first_name.after', ['customer' => $customer]); ?>


        <tr>
          <td><?php echo e(__('shop::app.customer.account.profile.lname')); ?></td>
          <td><?php echo e($customer->last_name); ?></td>
        </tr>

        <?php echo view_render_event('bagisto.shop.customers.account.profile.view.table.last_name.after', ['customer' => $customer]); ?>


        <tr>
          <td><?php echo e(__('shop::app.customer.account.profile.gender')); ?></td>
          <td><?php echo e($customer->gender ?? '-'); ?></td>
        </tr>

        <?php echo view_render_event('bagisto.shop.customers.account.profile.view.table.gender.after', ['customer' => $customer]); ?>


        <tr>
          <td><?php echo e(__('shop::app.customer.account.profile.dob')); ?></td>
          <td><?php echo e($customer->date_of_birth ?? '-'); ?></td>
        </tr>

        <?php echo view_render_event('bagisto.shop.customers.account.profile.view.table.date_of_birth.after', ['customer' => $customer]); ?>


        <tr>
          <td><?php echo e(__('shop::app.customer.account.profile.email')); ?></td>
          <td><?php echo e($customer->email); ?></td>
        </tr>

        <?php echo view_render_event(
        'bagisto.shop.customers.account.profile.view.table.after', ['customer' => $customer]); ?>

      </tbody>
    </table>
  </div>

  <button type="submit" class="theme-btn mb20" @click="showModal('deleteProfile')">
    <?php echo e(__('shop::app.customer.account.address.index.delete')); ?>

  </button>

  <form method="POST" action="<?php echo e(route('customer.profile.destroy')); ?>" @submit.prevent="onSubmit">
    <?php echo csrf_field(); ?>

    <modal id="deleteProfile" :is-open="modalIds.deleteProfile">
      <h3 slot="header"><?php echo e(__('shop::app.customer.account.address.index.enter-password')); ?>

      </h3>
      <i class="rango-close"></i>

      <div slot="body">
        <div class="control-group" :class="[errors.has('password') ? 'has-error' : '']">
          <label for="password" class="required"><?php echo e(__('admin::app.users.users.password')); ?></label>
          <input type="password" v-validate="'required|min:6|max:18'" class="control" id="password" name="password" data-vv-as="&quot;<?php echo e(__('admin::app.users.users.password')); ?>&quot;" />
          <span class="control-error" v-if="errors.has('password')">{{ errors.first('password') }}</span>
        </div>

        <div class="page-action">
          <button type="submit" class="theme-btn mb20">
            <?php echo e(__('shop::app.customer.account.address.index.delete')); ?>

          </button>
        </div>
      </div>
    </modal>
  </form>
</div>

<?php echo view_render_event('bagisto.shop.customers.account.profile.view.after', ['customer' => $customer]); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::customers.account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/account/profile/index.blade.php ENDPATH**/ ?>