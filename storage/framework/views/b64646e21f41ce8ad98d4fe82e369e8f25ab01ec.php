<?php $__env->startSection('vigilantes'); ?>
    <section>
        <form method="POST" action="<?php echo e(route('vigilantes.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="field"><br>
                <label for="condominium" class="label">¿Cuál su lugar de estancia?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="condominium" id="condominium">
                            <option value="" disabled selected>-- Elige una opción --</option>
                            <?php $__currentLoopData = $condominiums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condominium): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($condominium->id); ?>"><?php echo e($condominium->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <?php echo $errors->first('condominium', '
                    <small class="has-text-danger">:message</small>
                '); ?>

            </div>

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del vigilante?</label>
                <input id="first_name" name="first_name" class="input" type="text" placeholder="Aquí el nombre del vigilante"
                       value="<?php echo e(old('first_name')); ?>">
                <?php echo $errors->first('first_name', '
                    <small class="has-text-danger">:message</small>
                '); ?>

            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text" placeholder="Aquí el sus apellidos"
                       value="<?php echo e(old('last_name')); ?>">
                <?php echo $errors->first('last_name', '
                    <small class="has-text-danger">:message</small>
                '); ?>

            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel" placeholder="Aquí su número celular"
                       value="<?php echo e(old('phone')); ?>">
                <?php echo $errors->first('phone', '
                    <small class="has-text-danger">:message</small>
                '); ?>

            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vigilantes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\vos\resources\views/vigilantes/create.blade.php ENDPATH**/ ?>