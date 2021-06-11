<tbody>
    <?php if($records instanceof \Illuminate\Pagination\LengthAwarePaginator && count($records)): ?>
        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if($enableMassActions): ?>
                    <td>
                        <span class="checkbox">
                            <input type="checkbox" v-model="dataIds" @change="select" value="<?php echo e($record->{$index}); ?>">

                            <label class="checkbox-view" for="checkbox"></label>
                        </span>
                    </td>
                <?php endif; ?>

                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $columnIndex = explode('.', $column['index']);

                        $columnIndex = end($columnIndex);
                    ?>

                    <?php if(isset($column['wrapper'])): ?>
                        <?php if(isset($column['closure']) && $column['closure'] == true): ?>
                            <td data-value="<?php echo e($column['label']); ?>"><?php echo $column['wrapper']($record); ?></td>
                        <?php else: ?>
                            <td data-value="<?php echo e($column['label']); ?>"><?php echo e($column['wrapper']($record)); ?></td>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($column['type'] == 'price'): ?>
                            <?php if(isset($column['currencyCode'])): ?>
                                <td data-value="<?php echo e($column['label']); ?>"><?php echo e(core()->formatPrice($record->{$columnIndex}, $column['currencyCode'])); ?></td>
                            <?php else: ?>
                                <td data-value="<?php echo e($column['label']); ?>"><?php echo e(core()->formatBasePrice($record->{$columnIndex})); ?></td>
                            <?php endif; ?>
                        <?php else: ?>
                            <td data-value="<?php echo e($column['label']); ?>"><?php echo e($record->{$columnIndex}); ?></td>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($enableActions): ?>
                    <td class="actions" style="white-space: nowrap; width: 100px;" data-value="<?php echo e(__('ui::app.datagrid.actions')); ?>">
                        <div class="action">
                            <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $toDisplay = (isset($action['condition']) && gettype($action['condition']) == 'object') ? $action['condition']($record) : true;
                                ?>

                                <?php if($toDisplay): ?>
                                    <a
                                        id="<?php echo e($record->{$action['index'] ?? $index}); ?>"

                                        <?php if($action['method'] == 'GET'): ?>
                                            href="<?php echo e(route($action['route'], $record->{$action['index'] ?? $index})); ?>"
                                        <?php endif; ?>

                                        <?php if($action['method'] != 'GET'): ?>
                                            <?php if(isset($action['function'])): ?>
                                                v-on:click="<?php echo e($action['function']); ?>"
                                            <?php else: ?>
                                                v-on:click="doAction($event)"
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        data-method="<?php echo e($action['method']); ?>"
                                        data-action="<?php echo e(route($action['route'], $record->{$index})); ?>"
                                        data-token="<?php echo e(csrf_token()); ?>"

                                        <?php if(isset($action['target'])): ?>
                                            target="<?php echo e($action['target']); ?>"
                                        <?php endif; ?>

                                        <?php if(isset($action['title'])): ?>
                                            title="<?php echo e($action['title']); ?>"
                                        <?php endif; ?>
                                    >
                                        <span class="<?php echo e($action['icon']); ?>"></span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <tr>
            <td colspan="10">
                <p style="text-align: center;"><?php echo e($norecords); ?></p>
            </td>
        </tr>
    <?php endif; ?>
</tbody>
<?php /**PATH /home/prashant/Repo/pegalogics/bagisto/packages/Webkul/Ui/src/Providers/../Resources/views/datagrid/body.blade.php ENDPATH**/ ?>