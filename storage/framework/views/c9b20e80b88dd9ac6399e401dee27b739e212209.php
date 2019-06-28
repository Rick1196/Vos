<?php $__env->startSection('resident'); ?>
    <header class="header">
        <h1 class="title">Residente</h1>
        <h2 class="subtitle">Registrando a un nuevo residente</h2><br>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('residentes.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="field"><br>
                <label for="type" class="label">¿Qué tipo de residente eres?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="type" id="type">
                            <option value="" disabled selected>-- Elige una opción --</option>
                            <?php $__currentLoopData = $typeOfResidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($type->id); ?>"><?php echo e($type->type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                
            </div>

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del residente?</label>
                <input id="first_name" name="first_name" class="input" type="text"
                       placeholder="Aquí su nombre" required>
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text"
                       placeholder="Aquí sus apellidos" required>
            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel"
                       placeholder="Aquí su número de telefono celular" required>
            </div>

            <div class="field">
                <label for="email" class="label">¿Cuál es su correo electrónico?</label>
                <input id="email" name="email" class="input" type="email"
                       placeholder="Aquí su correo electrónico" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/residents/create.blade.php ENDPATH**/ ?>