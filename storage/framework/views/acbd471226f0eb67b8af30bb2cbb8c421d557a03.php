<?php $__env->startSection('visits'); ?>
<visits-component user="<?php echo e(Auth::user()->id); ?>"></visits-component>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/visits/create.blade.php ENDPATH**/ ?>