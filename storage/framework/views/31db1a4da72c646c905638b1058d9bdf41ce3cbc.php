

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form method="POST" action="<?php echo e(route("produto.store")); ?>">
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled>
              <div id="id-help" class="form-text"><?php echo e(__('welcome_dashboards.placeId')); ?></div>
            </div>
            <div class="mb-3">
              <label for="id-nome" class="form-label"><?php echo e(__('welcome_dashboards.nameUser')); ?></label>
              <input name="nome" type="text" class="form-control" id="id-nome" placeholder="<?php echo e(__('welcome_dashboards.placeName')); ?>">
            </div>
            <div class="mb-3">
              <label for="id-preco" class="form-label"><?php echo e(__('welcome_dashboards.price')); ?></label>
              <input name="preco" type="text" class="form-control" id="id-preco" placeholder="<?php echo e(__('welcome_dashboards.placePrice')); ?>">
            </div>
            <div class="mb-3">
                <label for="id-urlImage" class="form-label">Url Image</label>
                <input name="urlImage" type="text" class="form-control" id="id-urlImage" value="/img/default.png" placeholder="<?php echo e(__('welcome_dashboards.placeUrl')); ?>">
            </div>
            <div class="mb-3">
                <label for="id-ingredientes" class="form-label"><?php echo e(__('welcome_dashboards.itsIngredients')); ?></label>
                <input name="ingredientes" type="text" class="form-control" id="id-ingredientes" placeholder="<?php echo e(__('welcome_dashboards.placeIngredients')); ?>">
            </div>
            <div class="mb-3">
              <label for="id-tipo" class="form-label"><?php echo e(__('welcome_dashboards.type')); ?></label>
              <select name="Tipo_Produtos_id" class="form-select" aria-label="Default select example">
                <?php $__currentLoopData = $tipoProdutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoProduto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($tipoProduto->id); ?>"><?php echo e($tipoProduto->descricao); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnSave')); ?></button>
            <a href="<?php echo e(route("produto.index")); ?>" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Produto/create.blade.php ENDPATH**/ ?>