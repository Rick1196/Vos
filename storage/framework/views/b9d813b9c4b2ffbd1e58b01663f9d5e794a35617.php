<?php $__env->startSection('resident'); ?>
    <header class="header">
        <h1 class="title">Tipos de residentes</h1>
        <h2 class="subtitle">Un residente puede ser propietario o arrendatario de la casa.</h2>
        <p>
            Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
        </p>
    </header>
    <section>
        <form method="POST" action="<?php echo e(route('tipos_de_residentes.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="field"><br>
                <label for="type" class="label">¿Cuál es el tipo de residente?</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el tipo de residente"
                       value="<?php echo e(old('type')); ?>">
                <?php echo $errors->first('type', '
                    <small class="has-text-danger">:message</small><br>
                '); ?>

            </div>

            <div class="field">
                <label for="description" class="label">¿Cuál es la descripción de este tipo de residente?</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción"
                       value="<?php echo e(old('description')); ?>">
                <?php echo $errors->first('description', '
                    <small class="has-text-danger">:message</small><br>
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

<?php echo $__env->make('resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/type_residents/create.blade.php ENDPATH**/ ?>