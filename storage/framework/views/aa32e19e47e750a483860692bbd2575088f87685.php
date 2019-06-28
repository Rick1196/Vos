<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <section class="col-sm-3">
                <div class="hero-body">
                    <div class="">
                        <h1 class="title">
                            Vigilantes
                        </h1>
                        <h2 class="subtitle">
                            Configuración
                        </h2>
                    </div>
                </div>
                <div class="">
                    <?php echo $__env->make('partials.nav_vigilantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </section>

            <section class="col-sm-9">

                <div class="column">
                    <?php echo $__env->yieldContent('vigilantes', 'Contenido predeterminado para vigilantes'); ?>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/vigilantes.blade.php ENDPATH**/ ?>