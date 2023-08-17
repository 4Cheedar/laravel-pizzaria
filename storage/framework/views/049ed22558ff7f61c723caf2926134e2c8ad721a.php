

<?php $__env->startSection('content'); ?>
    <div class="container">
        <form>
          <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" value="<?php echo e($endereco->id); ?>" disabled>
              <div id="id-help" class="form-text"><?php echo e(__('welcome_dashboards.placeId')); ?></div>
            </div>
            <div class="mb-3">
              <label for="id-Users_id" class="form-label">Users_id</label>
              <input name="Users_id" type="text" class="form-control" id="id-Users_id" placeholder="Digite Users_id" value="<?php echo e($endereco->Users_id); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-bairro" class="form-label"><?php echo e(__('welcome_dashboards.itsDistrict')); ?></label>
                <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="Digite bairro" value="<?php echo e($endereco->bairro); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-logradouro" class="form-label"><?php echo e(__('welcome_dashboards.itsPlace')); ?></label>
                <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="Digite o logradouro" value="<?php echo e($endereco->logradouro); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-numero" class="form-label"><?php echo e(__('welcome_dashboards.itsNumber')); ?></label>
                <input name="numero" type="text" class="form-control" id="id-numero" placeholder="Digite o numero" value="<?php echo e($endereco->numero); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label"><?php echo e(__('welcome_dashboards.itsComplement')); ?></label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="<?php echo e($endereco->complemento); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">Updated_at</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="<?php echo e($endereco->updated_at); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">Created_at</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="<?php echo e($endereco->created_at); ?>" disabled>
            </div>
            <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Endereco/show.blade.php ENDPATH**/ ?>