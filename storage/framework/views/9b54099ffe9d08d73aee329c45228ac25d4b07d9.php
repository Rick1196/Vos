<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="col">
            <div class="hero-body">
                <div class="">
                    <h1 class="title">
                        Auditorias
                    </h1>
                    <h2 class="subtitle">
                        Secuencias, disparadores
                    </h2>
                </div>
            </div>
            <div class="hero-footer">
                <?php if(!request()->is('auditorias')): ?>
                    <a href="<?php echo e(route('auditorias')); ?>" class="btn btn-success">Regresar</a>
                <?php endif; ?>
            </div>
        </section>
        <section class="col-sm-9">
            <div class="column">
                <?php echo $__env->yieldContent('auditoria', 'Contenido predeterminado para auditorias'); ?>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/auditoria.blade.php ENDPATH**/ ?>