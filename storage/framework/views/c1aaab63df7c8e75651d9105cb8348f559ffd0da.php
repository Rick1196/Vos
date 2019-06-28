<?php $__env->startSection('visitors'); ?>
    <section>
        <header class="section">
            <h1 class="title">
                Tipos de transportes
            </h1>
            <h2 class="subtitle">
                ¿Cuáles son los medios de transportes que pueden ingresar a la privada un visitante?
            </h2>
            <p>En esta sección podrá gestionar los medios de transportes con los cuales las visitas podrian ingresar a la privada.</p>
            <a class="button is-warning" href="<?php echo e(route('conveyances.create')); ?>">Agrega nuevo tipo</a>
        </header>
        <?php if(count($type)==0): ?>
            <div class="notification is-danger">
                <button class="delete"></button>
                Primar lorem ipsum dolor sit amet, consectetur
                adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                consectetur adipiscing elit
            </div>
        <?php else: ?>
            <table class="table is-fullwidth">
                <thead>
                <tr>

                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->type); ?></td>
                        <td><?php echo e($item->description); ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route('conveyances.edit',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('conveyances.destroy',$item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/conveyances/index.blade.php ENDPATH**/ ?>