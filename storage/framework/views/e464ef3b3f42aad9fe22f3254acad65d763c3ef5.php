<?php $__env->startSection('condominium'); ?>
<section>
    <div class="container">
        <h1 class="title">
            Arrendando casa
        </h1>
    </div>
    <div class="container">
        <div class="contianer">
            <arrending-component house="<?php echo e($house->id); ?>"></arrending-component>
        </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('condominium', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/condominiums/arrending.blade.php ENDPATH**/ ?>