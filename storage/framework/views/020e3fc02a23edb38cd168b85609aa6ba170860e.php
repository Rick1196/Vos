<?php $__env->startSection('condominium'); ?>
<section>
    <div class="container">
        <table class="table">
                <thead>
                <tr>
                    <th>Estado</th>
                    <th>Numero de habitantes</th>
                    <th>Residente</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $casas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php if($house->estado != 0): ?>
                            <td>Arrendada</td>
                            <?php else: ?>
                                <td>Disponible</td>
                            <?php endif; ?>

                            <td><?php echo e($house->habitantes); ?></td>

                            <?php if($house->id_residente != null): ?>
                                <td><?php echo e($house->owner->first_name); ?></td>
                            <?php else: ?>
                                <td>Disponible</td>
                            <?php endif; ?>

                            <?php if($house->id_residente == null): ?>
                                <td><a class="btn btn-primary" href="<?php echo e(route('condominium.arrending',$house->id)); ?>">Rentar</button></a>
                            <?php else: ?>

                                 <td><button class="btn btn-primary" disabled>Rentar</button></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table><br>
        <?php echo e($casas->links()); ?>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('condominium', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/condominiums/houses.blade.php ENDPATH**/ ?>