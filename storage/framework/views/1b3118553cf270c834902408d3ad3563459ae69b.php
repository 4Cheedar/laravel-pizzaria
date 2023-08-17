<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('welcome_dashboards.dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a class="btn btn-primary" href="<?php echo e(route("endereco.index")); ?>"><?php echo e(__('welcome_dashboards.btnAdress')); ?></a>
                    <a class="btn btn-primary" href="<?php echo e(route("pedido.usuario.index")); ?>"><?php echo e(__('welcome_dashboards.btnRequest')); ?></a>
                    <a class="btn btn-primary" href="/"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/home.blade.php ENDPATH**/ ?>