<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(Auth::user()->hasRole('user')): ?>
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido vigilante</p>
                        </div>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole('auditor')): ?>
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido auditor</p>
                        </div>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole('admin')): ?>
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido administrador</p>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ricardo/Documents/projects/personal/php/laravel/vos/resources/views/home.blade.php ENDPATH**/ ?>