<?php $__env->startSection('visitors'); ?>
    <header class="header">
        <h1 class="title">Tipo de visitante</h1>
        <h2 class="subtitle">Crea nuevo tipo de visitante</h2>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('type_of_visitors.update', $typeOfVisitor->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo"
                       value="<?php echo e($typeOfVisitor->type); ?>" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción"
                       value="<?php echo e($typeOfVisitor->description); ?>" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/type_visitors/edit.blade.php ENDPATH**/ ?>