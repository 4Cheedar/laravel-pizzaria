

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form method="POST" action="<?php echo e(route("tipoproduto.store")); ?>">
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled>
              <div id="id-help" class="form-text"><?php echo e(__('welcome_dashboards.placeId')); ?></div>
            </div>
            <div class="mb-3">
              <label for="id-descricao" class="form-label"><?php echo e(__('welcome_dashboards.description')); ?></label>
              <input name="descricao" type="text" class="form-control" id="id-descricao" placeholder="<?php echo e(__('welcome_dashboards.placeDescription')); ?>">
            </div>
            <button type="submit" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnSave')); ?></button>
            <a href="<?php echo e(route("tipoproduto.index")); ?>" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/TipoProduto/create.blade.php ENDPATH**/ ?>