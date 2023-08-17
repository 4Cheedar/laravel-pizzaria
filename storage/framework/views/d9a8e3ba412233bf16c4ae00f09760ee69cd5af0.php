

<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php if(isset($tipoMensagem) && isset($mensagem)): ?>
            <div class="alert alert-<?php echo e($tipoMensagem); ?> alert-dismissible fade show" role="alert">
                <?php echo e($mensagem); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <a class="btn btn-primary" href="<?php echo e(route("produto.create")); ?>"><?php echo e(__('welcome_dashboards.btnCreateProduct')); ?></a>
        <a class="btn btn-primary" href="<?php echo e(route("admin.dashboard")); ?>"><?php echo e(__('welcome_dashboards.btnBack')); ?></a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col"><?php echo e(__('welcome_dashboards.nameUser')); ?></th>
                    <th scope="col"><?php echo e(__('welcome_dashboards.price')); ?></th>
                    <th scope="col"><?php echo e(__('welcome_dashboards.type')); ?></th>
                    <th scope="col"><?php echo e(__('welcome_dashboards.action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($produto->id); ?></th>
                        <td><?php echo e($produto->nome); ?></td>
                        <td><?php echo e($produto->preco); ?></td>
                        <td><?php echo e($produto->descricao); ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route("produto.show", $produto->id)); ?>"><?php echo e(__('welcome_dashboards.btnShow')); ?></a>
                            <a class="btn btn-secondary" href="<?php echo e(route("produto.edit", $produto->id)); ?>"><?php echo e(__('welcome_dashboards.btnEdit')); ?></a>
                            <a href="#" class="btn btn-danger btn-remover" data-bs-toggle="modal" data-bs-target="#id-remove-modal" value="<?php echo e(route("produto.destroy", $produto->id)); ?>"><?php echo e(__('welcome_dashboards.btnRemove')); ?></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="id-remove-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('welcome_dashboards.modalRmResource')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php echo e(__('welcome_dashboards.modalRemove')); ?>

                </div>
                <div class="modal-footer">
                    <form id="id-modal-form-delete" method="POST" action="" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger"><?php echo e(__('welcome_dashboards.btnRemove')); ?></button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Seleciono todos os elementos HTML que tenham a classe btn-remover
        const botoesRemover = document.querySelectorAll(".btn-remover");
        // Seleciono o form com o botão de confirmar remoção
        const modalFormDelete = document.querySelector("#id-modal-form-delete");
        //console.log(botoesRemover);
        botoesRemover.forEach(botao => {
            botao.addEventListener("click", botaoRemoverClick);
        });
        function botaoRemoverClick(){
            modalFormDelete.setAttribute("action", this.getAttribute("value"));
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/Produto/index.blade.php ENDPATH**/ ?>