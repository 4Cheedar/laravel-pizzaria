

<?php $__env->startSection('content'); ?>
    <div class="container">
      <form method="POST" action="<?php echo e(route("endereco.update", $endereco->id)); ?>">
          <?php echo csrf_field(); ?>
          <input name="_method" type="hidden" value="PUT">
          <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled value="<?php echo e($endereco->id); ?>">
              <div id="id-help" class="form-text"><?php echo e(__('welcome_dashboards.placeId')); ?></div>
          </div>
          
          <div class="mb-3">
              <label for="id-bairro" class="form-label"><?php echo e(__('welcome_dashboards.itsDistrict')); ?></label>
              <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="<?php echo e(__('welcome_dashboards.placeDistrict')); ?>" value="<?php echo e($endereco->bairro); ?>">
          </div>
          <div class="mb-3">
              <label for="id-logradouro" class="form-label"><?php echo e(__('welcome_dashboards.itsPlace')); ?></label>
              <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="<?php echo e(__('welcome_dashboards.placePlace')); ?>" value="<?php echo e($endereco->logradouro); ?>">
          </div>
          <div class="mb-3">
              <label for="id-numero" class="form-label"><?php echo e(__('welcome_dashboards.itsNumber')); ?></label>
              <input name="numero" type="text" class="form-control" id="id-numero" placeholder="<?php echo e(__('welcome_dashboards.placeNumber')); ?>" value="<?php echo e($endereco->numero); ?>">
          </div>
          <div class="mb-3">
              <label for="id-complemento" class="form-label"><?php echo e(__('welcome_dashboards.itsComplement')); ?></label>
              <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="<?php echo e(__('welcome_dashboards.placeComplement')); ?>" value="<?php echo e($endereco->complemento); ?>">
          </div>
          <button type="submit" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnSave')); ?></button>
          <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Endereco/edit.blade.php ENDPATH**/ ?>