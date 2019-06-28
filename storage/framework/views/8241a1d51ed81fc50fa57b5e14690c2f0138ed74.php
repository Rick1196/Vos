<?php $__env->startSection('visits'); ?>
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                Visitas realizadas al interior
            </h2>

        </header>
        <?php if(count($visits)==0): ?>
            <article class="message is-danger">
                <div class="message-body">
                    <p>No hay visitas registradas</p>
                </div>
            </article>
        <?php else: ?>
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Visitante</th>
                    <th>Visita a:</th>
                    <th>Fecha </th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($v->tipo); ?></td>
                        <td><?php echo e($v->visitante); ?></td>
                        <td><?php echo e($v->residente); ?></td>
                        <td><?php echo e($v->fecha); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                    </tr>
                </tbody>

            </table>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/visits/index.blade.php ENDPATH**/ ?>