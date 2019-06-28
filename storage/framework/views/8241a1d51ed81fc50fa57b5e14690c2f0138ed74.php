<?php $__env->startSection('visits'); ?>
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
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
                    <th>Vigilante</th>
                    <th>Visita a:</th>
                    <th>Fecha </th>
                </tr>
                </thead>
                <?php $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tbody>
                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($visitante->tipoDeVisitante->type); ?></td>
                        <td><?php echo e($visitante->first_name); ?></td>
                        <td><?php echo e($visitante->last_name); ?></td>
                        <td><?php echo e($visitante->phone); ?></td>

                        <td>
                            <form method="POST"
                                  action="<?php echo e(route('visitante.eliminar', $visitante->id)); ?>" >
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/visits/index.blade.php ENDPATH**/ ?>