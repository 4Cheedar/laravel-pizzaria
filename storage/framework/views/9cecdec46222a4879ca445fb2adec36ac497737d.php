

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="<?php echo e($produto->id); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo e(__('welcome_dashboards.nameUser')); ?></label>
            <input type="text" class="form-control" value="<?php echo e($produto->nome); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo e(__('welcome_dashboards.price')); ?></label>
            <input type="text" class="form-control" value="<?php echo e($produto->preco); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Url Image</label>
            <input type="text" class="form-control" value="<?php echo e($produto->urlImage); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo e(__('welcome_dashboards.itsIngredients')); ?></label>
            <input type="text" class="form-control" value="<?php echo e($produto->ingredientes); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label"><?php echo e(__('welcome_dashboards.type')); ?></label>
            <input type="text" class="form-control" value="<?php echo e($produto->descricao); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Updated_at</label>
            <input type="text" class="form-control" value="<?php echo e($produto->updated_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Created_at</label>
            <input type="text" class="form-control" value="<?php echo e($produto->created_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="<?php echo e(Route("produto.index")); ?>"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Produto/show.blade.php ENDPATH**/ ?>