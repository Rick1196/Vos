<?php $__env->startSection('vigilantes'); ?>
    <header class="header">
        <h1 class="title">Modifica el registro</h1>
        <h2 class="subtitle">Vigilante</h2> <br>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('vigilantes.update', $vigilante->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del vigilante?</label>
                <input id="first_name" name="first_name" class="input" type="text"
                       placeholder="Aquí el nombre del vigilante"
                       value="<?php echo e($vigilante->first_name); ?>">
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text"
                       placeholder="Aquí el sus apellidos"
                       value="<?php echo e($vigilante->last_name); ?>">
            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel"
                       placeholder="Aquí su número celular"
                       value="<?php echo e($vigilante->phone); ?>">
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vigilantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/vigilantes/edit.blade.php ENDPATH**/ ?>