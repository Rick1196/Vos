<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <section class="col-sm-12">
                <h1 class="title">
                    Codominio
                </h1>
                <div class="column">
                    <?php echo $__env->yieldContent('condominium', 'Contenido predeterminado para visitantes'); ?>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/condominium.blade.php ENDPATH**/ ?>