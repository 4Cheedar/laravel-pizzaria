

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form method="POST" action="<?php echo e(route("endereco.store")); ?>">
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled>
              <div id="id-help" class="form-text"><?php echo e(__('welcome_dashboards.placeId')); ?></div>
            </div>
            <div class="mb-3">
                <label for="id-bairro" class="form-label"><?php echo e(__('welcome_dashboards.itsDistrict')); ?></label>
                <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="<?php echo e(__('welcome_dashboards.placeDistrict')); ?>">
            </div>
            <div class="mb-3">
                <label for="id-logradouro" class="form-label"><?php echo e(__('welcome_dashboards.itsPlace')); ?></label>
                <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="<?php echo e(__('welcome_dashboards.placePlace')); ?>">
            </div>
            <div class="mb-3">
                <label for="id-numero" class="form-label"><?php echo e(__('welcome_dashboards.itsNumber')); ?></label>
                <input name="numero" type="text" class="form-control" id="id-numero" placeholder="<?php echo e(__('welcome_dashboards.placeNumber')); ?>">
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label"><?php echo e(__('welcome_dashboards.itsComplement')); ?></label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="<?php echo e(__('welcome_dashboards.placeComplement')); ?>">
            </div>
            <button type="submit" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnSave')); ?></button>
            <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Endereco/create.blade.php ENDPATH**/ ?>