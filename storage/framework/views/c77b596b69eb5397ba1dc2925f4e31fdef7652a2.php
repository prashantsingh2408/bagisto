<?php if($paginator->hasPages()): ?>
    <div class="pagination shop mt-50">
        
        <?php if($paginator->onFirstPage()): ?>
            <a class="page-item previous">
                <i class="icon angle-left-icon"></i>
            </a>
        <?php else: ?>
            <a data-page="<?php echo e(urldecode($paginator->previousPageUrl())); ?>" href="<?php echo e(urldecode($paginator->previousPageUrl())); ?>" id="previous" class="page-item previous">
                <i class="icon angle-left-icon"></i>
            </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <a class="page-item disabled" aria-disabled="true">
                    <?php echo e($element); ?>

                </a>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <a class="page-item active">
                            <?php echo e($page); ?>

                        </a>
                    <?php else: ?>
                        <a class="page-item as" href="<?php echo e(urldecode($url)); ?>">
                            <?php echo e($page); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e(urldecode($paginator->nextPageUrl())); ?>" data-page="<?php echo e(urldecode($paginator->nextPageUrl())); ?>" id="next" class="page-item next">
                <i class="icon angle-right-icon"></i>
            </a>
        <?php else: ?>
            <a class="page-item next">
                <i class="icon angle-right-icon"></i>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/prashant/Repo/pegalogics/bagisto/resources/themes/default/views/partials/pagination.blade.php ENDPATH**/ ?>