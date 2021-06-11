<?php $__env->startSection('page_title'); ?>
  <?php echo e(__('shop::app.customer.signup-form.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-wrapper'); ?>
  <div class="auth-content form-container">
    <div class="container">
      <div class="col-lg-10 col-md-12 offset-lg-1">
        <div class="heading">
          <h2 class="fs24 fw6">
            
            Smart User Registration
          </h2>

          <a href="<?php echo e(route('customer.session.index')); ?>"
             class="btn-new-customer">
            <button type="button"
                    class="theme-btn light">
              <?php echo e(__('velocity::app.customer.signup-form.login')); ?>

            </button>
          </a>
        </div>

        <div class="body col-12">
          <h3 class="fw6">
            
            Become Smart User
          </h3>

          <p class="fs16">
            
            Register to use MLM Feature and crete your network
          </p>

          <?php echo view_render_event('bagisto.shop.customers.signup.before'); ?>


          <form method="post"
                action="<?php echo e(route('customer.register.create_smart')); ?>"
                @submit.prevent="onSubmit">

            <?php echo e(csrf_field()); ?>


            <?php echo view_render_event('bagisto.shop.customers.signup_form_controls.before'); ?>


            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                
                Member 1 (optional)
              </label>

              <input list="member_1"
                     type="text"
                     class="form-style"
                     name="member_1"
                     
                     value="<?php echo e(old('first_name')); ?>"
                     data-vv-as="&quot;<?php echo e(__('shop::app.customer.signup-form.firstname')); ?>&quot;" />

              <datalist id="member_1">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($customer->email); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </datalist>

              <span class="control-error"
                    v-if="errors.has('first_name')">
                {{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                
                Member 2 (optional)
              </label>

              <input list='member_2'
                     type="text"
                     class="form-style"
                     name="member_2"
                     
                     value="<?php echo e(old('first_name')); ?>"
                     data-vv-as="&quot;<?php echo e(__('shop::app.customer.signup-form.firstname')); ?>&quot;" />
              <datalist id="member_2">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($customer->email); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                {{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                
                Member 3 (optional)
              </label>

              <input list='member_3'
                     type="text"
                     class="form-style"
                     name="member_3"
                     
                     value="<?php echo e(old('first_name')); ?>"
                     data-vv-as="&quot;<?php echo e(__('shop::app.customer.signup-form.firstname')); ?>&quot;" />
              <datalist id="member_3">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($customer->email); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                {{ errors . first('first_name') }}
              </span>
            </div>

            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                
                Member 4 (optional)
              </label>

              <input list='member_4'
                     type="text"
                     class="form-style"
                     name="member_4"
                     
                     value="<?php echo e(old('first_name')); ?>"
                     data-vv-as="&quot;<?php echo e(__('shop::app.customer.signup-form.firstname')); ?>&quot;" />
              <datalist id="member_4">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($customer->email); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                {{ errors . first('first_name') }}
              </span>
            </div>
            <div class="control-group"
                 :class="[errors.has('first_name') ? 'has-error' : '']">
              <label for="first_name"
                     class=" label-style">
                
                Member 5 (optional)
              </label>

              <input list='member_5'
                     type="text"
                     class="form-style"
                     name="member_5"
                     
                     value="<?php echo e(old('first_name')); ?>"
                     data-vv-as="&quot;<?php echo e(__('shop::app.customer.signup-form.firstname')); ?>&quot;" />
              <datalist id="member_5">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($customer->email); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </datalist>
              <span class="control-error"
                    v-if="errors.has('first_name')">
                {{ errors . first('first_name') }}
              </span>
            </div>

            
            <button class="theme-btn"
                    type="submit">
              <?php echo e(__('shop::app.customer.signup-form.title')); ?>

            </button>
          </form>

          <?php echo view_render_event('bagisto.shop.customers.signup.after'); ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/velocity/views/customers/signup/index_smart.blade.php ENDPATH**/ ?>