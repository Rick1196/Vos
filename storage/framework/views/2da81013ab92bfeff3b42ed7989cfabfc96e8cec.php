<?php $__env->startSection('visitors'); ?>

    <section>
        <header class="section">
            <h1 class="title">
                Tipos de visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
            </h2>
            <p>
                Para identificar y registrar datos del tipo de personas o servicios que pueden ingresar al interior de la privada
                debemos de contestar la pregunta anterior. Ejemplos:<strong>(Servicios, Familiares, Dominos Pizza, Carniceria la Ascienda, etc)</strong>.
            </p>
            <a class="button is-warning" href="<?php echo e(route('type_of_visitors.create')); ?>">Agrega nuevo tipo</a>
        </header>
        <?php if(count($type)==0): ?>
            <div class="notification is-danger">
                <button class="delete"></button>
                Por el momento no tenemos registrado ningun tipo de visitante en el sistema
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
                            <a class="btn btn-primary" href="<?php echo e(route('type_of_visitors.edit',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('type_of_visitors.destroy',$item->id)); ?>" method="POST">
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

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/type_visitors/index.blade.php ENDPATH**/ ?>