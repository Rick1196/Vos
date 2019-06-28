<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                    <section>
                        <?php if(count($clientes)==0): ?>
                            <article class="message is-danger">
                                <div class="message-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>No hay registro de clientes</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                                    <strong>Necesita hacer la carga masiva de los datos desde la consola.</strong>
                                </div>
                            </article>
                        <?php else: ?>
                            <table class="table is-fullwidth">
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Correo</th>
                                </thead>

                                <tbody>
                                <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cliente->id); ?></td>
                                        <td><?php echo e($cliente->nombre); ?></td>
                                        <td><?php echo e($cliente->apellido); ?></td>
                                        <td><?php echo e($cliente->correo); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($clientes->links()); ?>

                        <?php endif; ?>
                    </section>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/clientes/index.blade.php ENDPATH**/ ?>