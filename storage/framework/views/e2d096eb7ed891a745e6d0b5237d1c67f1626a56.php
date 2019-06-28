<?php $__env->startSection('auditoria'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <section>
                    <?php if(count($credenciales)==0): ?>
                        <article class="message is-danger">
                            <div class="message-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>No hay registro de movimientos en la tabla conveyances</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                                <strong>Necesita hacer la carga masiva de los datos desde la consola.</strong>
                            </div>
                        </article>
                    <?php else: ?>
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $credenciales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credencial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($credencial->descripcion); ?></td>
                                    <td><?php echo e($credencial->fecha); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </section>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auditoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/auditorias/audit_credentials.blade.php ENDPATH**/ ?>