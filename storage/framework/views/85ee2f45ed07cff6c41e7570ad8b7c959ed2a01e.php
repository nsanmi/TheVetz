<?php if($paginator->hasPages()): ?>
    <nav class="dc-pagination">
        <ul>
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="dc-prevpage"><a href="javascript:void"><i class="lnr lnr-chevron-left"></i></a></li>
            <?php else: ?>
                <li class="dc-prevpage"><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"> <i class="lnr lnr-chevron-left"></i></a></li>
            <?php endif; ?>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li class="disabled"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>
                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="dc-active"><span>0<?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li><a href="<?php echo e($url); ?>">0<?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php if($paginator->hasMorePages()): ?>
                <li class="dc-nextpage"><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="lnr lnr-chevron-right"></i></a></li>
            <?php else: ?>
                <li class="disabled dc-nextpage"><a href="javascript:void"><i class="lnr lnr-chevron-right"></i></a></li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\doctry\resources\views/pagination/custom.blade.php ENDPATH**/ ?>