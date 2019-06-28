<?php $__env->startSection('resident'); ?>
    <section>
        <header class="section">
            <h1 class="title">
                Residentes
            </h1>
            <h2 class="subtitle">
                Los residentes
            </h2>
            <p>Aquí se<strong> gestionarán los residentes de la privada.</strong>
            </p>
            <a class="button is-warning" href="<?php echo e(route('residentes.create')); ?>">Agrega un nuevo residente</a>
        </header>
        <?php if(count($residentes)==0): ?>
            <div class="notification is-danger">
                <button class="delete"></button>
                No hay residentes registrados
            </div>
        <?php else: ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo de residente</th>
                    <th>Ver</th>
                    <th>Nuevo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $residentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $residente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($residente->relatives_id == null): ?>
                    <tr>
                        <td><?php echo e($residente->first_name); ?></td>
                        <td><?php echo e($residente->last_name); ?></td>
                        <td><?php echo e($residente->tipoDeResidente->type); ?></td>
                        <td>
                            <?php if($residente->relatives_id == null): ?>
                                <a class="button btn-primary has-text-primary" href="<?php echo e(route('residentes.show',$residente->id)); ?>">
                                    <i class="fas fa-eye"></i>
                                </a>
                            <?php else: ?>

                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($residente->relatives_id == null): ?>
                                <a class="button btn-primary has-text-link" href="<?php echo e(route('familiar',$residente->id)); ?>">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            <?php else: ?>

                            <?php endif; ?>
                        </td>
                        <td>
                            <a class="button btn-primary has-text-info" href="<?php echo e(route('residentes.edit',$residente->id)); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('residentes.destroy',$residente->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php else: ?>
                        <tr>
                            <td class="has-text-grey-light"><?php echo e($residente->first_name); ?></td>
                            <td class="has-text-grey-light"><?php echo e($residente->last_name); ?></td>
                            <td class="has-text-grey-light"><?php echo e($residente->tipoDeResidente->type); ?></td>
                            <td class="has-text-grey-light">
                                <?php if($residente->relatives_id == null): ?>
                                    <a class="button btn-primary has-text-primary" href="<?php echo e(route('residentes.show',$residente->id)); ?>">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                <?php else: ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($residente->relatives_id == null): ?>
                                    <a class="button btn-primary has-text-link" href="<?php echo e(route('familiar',$residente->id)); ?>">
                                        <i class="fas fa-user-plus"></i>
                                    </a>
                                <?php else: ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <a class="button btn-primary has-text-info" href="<?php echo e(route('residentes.edit',$residente->id)); ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('residentes.destroy',$residente->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($residentes->links()); ?>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/residents/index.blade.php ENDPATH**/ ?>