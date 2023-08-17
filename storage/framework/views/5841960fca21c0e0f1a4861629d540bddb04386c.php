

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->id); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo e(__('welcome_dashboards.description')); ?></label>
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->descricao); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Updated_at</label>
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->updated_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Created_at</label>
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->created_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="<?php echo e(Route("tipoproduto.index")); ?>"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/TipoProduto/show.blade.php ENDPATH**/ ?>