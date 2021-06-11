<thead v-if="massActionsToggle == false">
    <tr style="height: 65px;">
        <?php if($results['records'] instanceof \Illuminate\Pagination\LengthAwarePaginator && count($results['records']) && $results['enableMassActions']): ?>
            <th class="grid_head" id="mastercheckbox" style="width: 50px;">
                <span class="checkbox">
                    <input type="checkbox" v-model="allSelected" v-on:change="selectAll">

                    <label class="checkbox-view" for="checkbox"></label>
                </span>
            </th>
        <?php endif; ?>

        <?php $__currentLoopData = $results['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th class="grid_head"
                <?php if(isset($column['width'])): ?>
                    style="width: <?php echo e($column['width']); ?>"
                <?php endif; ?>

                <?php if(isset($column['sortable']) && $column['sortable']): ?>
                    v-on:click="sortCollection('<?php echo e($column['index']); ?>')"
                <?php endif; ?>
            >
                <?php echo e($column['label']); ?>

            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($results['enableActions']): ?>
            <th>
                <?php echo e(__('ui::app.datagrid.actions')); ?>

            </th>
        <?php endif; ?>
    </tr>
</thead><?php /**PATH /home/prashant/Repo/pegalogics/bagisto/packages/Webkul/Ui/src/Providers/../Resources/views/datagrid/partials/default-header.blade.php ENDPATH**/ ?>