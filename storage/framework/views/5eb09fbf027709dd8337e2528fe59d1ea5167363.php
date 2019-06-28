<?php $__env->startSection('resident'); ?>
    <section>

        <?php if(count($familiares)==0): ?>
            <div class="alert alert-success" role="alert">
                <h3 class="alert-heading">Hola <?php echo e($residente->first_name); ?></h3>
                <hr>
                <p class="mb-0">
                    Eres el unico habitante en la casa.
                </p>
            </div>
        <?php else: ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Hola <?php echo e($residente->first_name); ?></h4>
                <hr>
                <p class="mb-0">
                    Esta es una lista de los integrantes de tu grupo hogar.
                </p>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo electrónico</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $familiares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familiar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($familiar->first_name); ?></td>
                            <td><?php echo e($familiar->last_name); ?></td>
                            <td><?php echo e($familiar->email); ?></td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
            <a class="button is-primary is-inverted" href="<?php echo e(route('residentes.index')); ?>">
                Regresar
            </a>
            <a class="btn btn-success" href="<?php echo e(route('familiar',$residente->id)); ?>">
                Agregar un familiar
            </a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/residents/show.blade.php ENDPATH**/ ?>