<?php $__env->startSection('visitors'); ?>
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
            </h2>

        </header>
        <?php if(count($MyGroupBy)==0): ?>
            <article class="message is-danger">
                <div class="message-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>No hay registro de visitantes</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                    <a class="button is-link" href="<?php echo e(route('visitante.crear')); ?>">Agrega los datos de un visitante</a>
                </div>
            </article>
        <?php else: ?>

            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono de contacto</th>
                    <th>Eliminar </th>
                </tr>
                </thead>
                <?php for($i = 1; $i <= sizeof($MyGroupBy); $i++): ?>

                <tbody>
                <?php $__currentLoopData = $MyGroupBy[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <?php endfor; ?>

            </table>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/visitors/index.blade.php ENDPATH**/ ?>