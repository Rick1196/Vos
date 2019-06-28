<?php $__env->startSection('visitors'); ?>
    <header class="header">
        <h1 class="title">Visitante</h1>
        <h2 class="subtitle">Progama la visita de un servicio o de un conocido</h2>
        <p>
            Es necesario que rellene cada uno de los campos con los datos correctos, pues en
            caso de una emergencia podremos comunicarnos con esta persona o servicio.
        </p><br>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('visitante.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="field"><br>
                <label for="type_visitor" class="label">¿Qué tipo de visita tendra?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="type_visitor" id="type_visitor">
                            <option value="" disabled selected>-- Selecciona una opcion --</option>
                            <?php $__currentLoopData = $tiposDeVisitantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoVisitante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tipoVisitante->id); ?>"><?php echo e($tipoVisitante->type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php echo $errors->first('type_visitor', '
                            <small class="has-text-danger">:message</small>
                        '); ?>

                    </div>
                </div>
            </div>
            <div class="field"><br>
                <label for="first_name" class="label">¿Cuál es el nombre de la persona?</label>
                <input id="first_name" name="first_name" class="input" type="text" placeholder="Aquí su nombre" value="<?php echo e(old('first_name')); ?>">
                <?php echo $errors->first('first_name', '
                    <small class="has-text-danger">:message</small><br>
                '); ?>

            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text" placeholder="Aquí su apellido o apellidos" value="<?php echo e(old('last_name')); ?>">
                <?php echo $errors->first('last_name', '
                    <small class="has-text-danger">:message</small><br>
                '); ?>

            </div>

            <div class="field">
                <label for="phone" class="label">Telefono</label>
                <input id="phone" name="phone" class="input" type="tel" placeholder="Aquí su telefono" value="<?php echo e(old('phone')); ?>">
                <?php echo $errors->first('phone', '
                    <small class="has-text-danger">:message</small><br>
                '); ?>

            </div>

            <div class="field"><br>
                <label for="credential" class="label">¿Cuál es el tipo de credencial con la que se estan identificando?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="credential" id="credential">
                            <option value="" disabled selected>-- Selecciona una opción --</option>
                            <?php $__currentLoopData = $credenciales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credencial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($credencial->id); ?>"><?php echo e($credencial->type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php echo $errors->first('credential', '
                            <small class="has-text-danger">:message</small><br>
                        '); ?>

                    </div>
                </div>
            </div>

            <div class="field"><br>
                <label for="conveyance" class="label">¿Qué medio de transporte utilizan para ingresar?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="conveyance" id="conveyance">
                            <option value="" disabled selected>-- Selecciona una opción --</option>
                            <?php $__currentLoopData = $transportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($transporte->id); ?>"><?php echo e($transporte->type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php echo $errors->first('conveyance', '
                            <small class="has-text-danger">:message</small><br>
                        '); ?>

                    </div>
                </div>
            </div><br>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>

            </div>
        </form>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('visitors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/visitors/create.blade.php ENDPATH**/ ?>