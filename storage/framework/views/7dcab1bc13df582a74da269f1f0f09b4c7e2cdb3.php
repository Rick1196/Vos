<?php $__env->startSection('auditoria'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            

            <section>

                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Nombre de la tabla</th>
                        <th>Operación</th>
                        <th>Movimientos</th>
                        <th>Historial</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Medios de transportes</td>
                            <td>conveyances</td>
                            <td>trigger</td>
                            <td><?php echo e($transportes); ?></td>
                            <td><a href="<?php echo e(route('audit_conveyances')); ?>" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Credenciales</td>
                            <td>credentials</td>
                            <td>trigger</td>
                            <td><?php echo e($credenciales); ?></td>
                            <td><a href="<?php echo e(route('audit_credentials')); ?>" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Tipos de visitantes</td>
                            <td>type_of_visitors</td>
                            <td>sequence</td>
                            <td><?php echo e($tipos); ?></td>
                            <td><a href="<?php echo e(route('audit_tvisitors')); ?>" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Visitante</td>
                            <td>type_of_visitors</td>
                            <td>sequence</td>
                            <td><?php echo e($visitante); ?></td>
                            <td><a href="<?php echo e(route('audit_visitante')); ?>" class="btn btn-primary">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auditoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/auditorias/tablero.blade.php ENDPATH**/ ?>