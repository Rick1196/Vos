<?php $__env->startSection('vigilantes'); ?>
    <?php if(count($vigilantes)==0): ?>

        <header class="section">
            <h1 class="title">
                Configurando
            </h1>
            <h2 class="subtitle">
                Nullam gravida purus diam, et dictum felis venenatis efficitur.
            </h2>
        </header>

        <article class="message is-link">
            <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>,
                tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
                in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor
                mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                <a class="button is-link" href="<?php echo e(route('vigilantes.create')); ?>">Agrega los datos de un vigilante</a>
            </div>
        </article>

    <?php else: ?>
        <section>
            <header class="header">
                <h1 class="title">
                    Configurando
                </h1>
                <h2 class="subtitle">
                    Nullam gravida purus diam, et dictum felis venenatis efficitur.
                </h2>
            </header>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Condominio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $vigilantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vigilant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($vigilant->first_name); ?></td>
                        <td><?php echo e($vigilant->last_name); ?></td>
                        <td><?php echo e($vigilant->phone); ?></td>
                        <td><?php echo e($vigilant->atCondominium->name); ?></td>
                        <td>
                            <a class="button has-text-info" href="<?php echo e(route('vigilantes.edit', $vigilant->id)); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="<?php echo e(route('vigilantes.destroy', $vigilant->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php echo e($vigilantes->links()); ?>

        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vigilantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/vigilantes/index.blade.php ENDPATH**/ ?>