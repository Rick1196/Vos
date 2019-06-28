<?php $__env->startSection('condominium'); ?>
    <section>
        <?php if(count($condominio)==0): ?>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>,
                    tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                    Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
                    in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor
                    mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                    <a class="button is-link" href="<?php echo e(route('condominium.create')); ?>">Agrega la ubicación del condominio</a>
                </div>
            </article>
        <?php else: ?>

            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <?php echo e($condominio->first()->name); ?>

                    </p>

                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo e($condominio->first()->address); ?>

                        <br>
                        <p>Código postal <strong><?php echo e($condominio->first()->postal); ?></strong></p>
                        <?php if($condominio->first()->num_rented_houses == 0): ?>
                            <p><strong>No hay casas en arrendamiento.</strong></p>
                        <?php else: ?>
                            <p>Numero de casas en renta: <strong><?php echo e($condominio->first()->num_rented_houses); ?></strong></p>
                        <?php endif; ?>
                    </div>
                </div>
                <footer class="card-footer">
                    <p href="#" class="card-footer-item">Telefono: <?php echo e($condominio->first()->phone); ?></p>
                    <a href="<?php echo e(route('condominium.edit', $condominio->first()->id)); ?>" class="card-footer-item">Editar</a>
                </footer>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('condominium', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/condominiums/index.blade.php ENDPATH**/ ?>