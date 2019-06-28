<?php if($paginator->hasPages()): ?>
    <nav class="pagination" role="navigation" aria-label="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <a class="pagination-previous" title="This is the first page" disabled>Anterior</a>
        <?php else: ?>
            <a class="pagination-previous" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>">Anterior</a>
        <?php endif; ?>
        
        <?php if($paginator->hasMorePages()): ?>
            <a class="pagination-next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>">
                Siguiente página
            </a>
        <?php else: ?>
            <a class="pagination-next" disabled>
                Siguiente página
            </a>
        <?php endif; ?>
        <ul class="pagination-list">

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li aria-disabled="true">
                        <a class="pagination-link is-current" aria-current="page">
                            <?php echo e($element); ?>

                        </a>
                    </li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li >
                                <a class="pagination-link is-current " ><?php echo e($page); ?></a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a class="pagination-link " href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>