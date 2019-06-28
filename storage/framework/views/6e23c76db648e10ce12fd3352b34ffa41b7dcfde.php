<?php $__env->startSection('visitors'); ?>
<section>
    <header class="section">
        <h1 class="title">
            Tipos de credenciales
        </h1>
        <h2 class="subtitle">
            ¿Qué tipos de credenciales se permitirán para poder acceder a la privada?
        </h2>
        <p>
            Este documento o identificación es importantes para confirmar la identidad de la
            persona, grupo de personas o servicios que pretenden acceder a la privada.
        </p>
        <p>Aquí <strong>se listarán las credenciales permitidas.</strong></p>
        <a class="button is-warning" href="<?php echo e(route('credentials.create')); ?>">Agrega nuevo tipo</a>
    </header>
    <?php if(count($type)==0): ?>
        <div class="notification is-danger">
            <button class="delete"></button>
            Primar lorem ipsum dolor sit amet, consectetur
            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
            consectetur adipiscing elit
        </div>
    <?php else: ?>
        <table class="table">
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
                        <a class="btn btn-primary" href="<?php echo e(route('credentials.edit',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('credentials.destroy',$item->id)); ?>" method="POST">
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

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/credentials/index.blade.php ENDPATH**/ ?>