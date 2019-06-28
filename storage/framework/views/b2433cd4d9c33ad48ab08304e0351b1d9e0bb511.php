<?php $__env->startSection('visitors'); ?>
    <header class="header">
        <h1 class="title">Tipo de transporte</h1>
        <h2 class="subtitle">Agrega nuevo tipo de transporte</h2>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('conveyances.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/conveyances/create.blade.php ENDPATH**/ ?>