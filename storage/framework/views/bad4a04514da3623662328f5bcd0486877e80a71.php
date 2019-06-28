<?php $__env->startSection('condominium'); ?>
    <section>
        <?php if(count($condominios)==0): ?>
            <header class="section">
                <h1 class="title">
                    Configurando
                </h1>
                <h2 class="subtitle">
                    Ingrese sus datos de ubicación
                </h2>


            </header>
            <article class="message is-link">
                <div class="message-body">
                    No hay condominios registrador
                    <a class="button is-link" href="<?php echo e(route('condominium.create')); ?>">Agrega la ubicación del condominio</a>
                </div>
            </article>
        <?php else: ?>
            <div class="container">
                <h3>
                    <p class="text-center">
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p class="text-center"><?php echo e($message); ?></p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
    
                        <?php endif; ?>
                    </p>
                </h3>
            </div>
            <div class="container">
                <a class="button is-link" href="<?php echo e(route('condominium.create')); ?>">Agrega condominio</a>
            </div><br>
            <?php $__currentLoopData = $condominios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condominio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?php echo e($condominio->name); ?>

                        </p>

                    </header>
                    <div class="card-content">
                        <div class="content">
                            <?php echo e($condominio->address); ?>

                            <br>
                            <p>Código postal <strong><?php echo e($condominio->postal); ?></strong></p>
                            <?php if($condominio->num_rented_houses == 0): ?>
                                <p><strong>No hay casas en arrendamiento.</strong></p>
                            <?php else: ?>
                                <p>Numero de casas en renta: <strong><?php echo e($condominio->num_rented_houses); ?></strong></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <p href="#" class="card-footer-item">Telefono: <?php echo e($condominio->phone); ?></p>
                        <a href="<?php echo e(route('condominium.edit', $condominio->id)); ?>" class="card-footer-item">Editar</a>
                        <form action="<?php echo e(route('condominium.destroy',$condominio->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button  type="submit" class="card-footer-item btn btn-light">Eliminar condominio</button>
                        </form>
                        <a href="<?php echo e(route('condominium.houses', $condominio->id)); ?>" class="card-footer-item">Listar casas</a>
                    </footer>
                </div><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($condominios->links()); ?>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('condominium', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/condominiums/index.blade.php ENDPATH**/ ?>