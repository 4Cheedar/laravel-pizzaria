

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/pedidoUsuario.css')); ?>>
    <div class="container">
        
        <div>
            <h1 class="text-center"><?php echo e(__('welcome_dashboards.makeRequest')); ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="<?php echo e(__('welcome_dashboards.placeFilter')); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="" id="id-select-filtro-tipo">
                        <option value="0">Todos</option>
                        <option value="1">Pizza</option>
                        <option value="2">Sucos</option>
                        <option value="3">Cerveja</option>
                    </select>
                </div>
            </div>
        </div>

        
        <div id="id-div-lista-produtos">
        </div>

        
        <div class="my-4 border border-dark">
            <div class="m-3">
                <h4><?php echo e(__('welcome_dashboards.itsItens')); ?></h4>
            </div>
            <div class="m-3">
                <table class="table text-center">
                    <tbody id="id-tbody-itens-pedido">
                    </tbody>
                </table>
            </div>
            <div class="m-3">
                <a class="btn btn-primary w-100" href="#"><?php echo e(__('welcome_dashboards.btnNext')); ?></a>
            </div>
        </div>
        
    </div>

        <!-- Modal -->
        <div class="modal fade" id="id-remove-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-3">
                            <div class="col-md-3 p-3">
                                <img id="id-modal-img-produto" class="w-100 h-100" src="#" alt="" srcset="">
                            </div>
                            <div class="col-md-6 my-auto">
                                <h5 id="id-modal-nome-produto" class="my-3">PRODUTO NOME</h5>
                                <h6 class="my-2">Ingredientes:</h6>
                                <p id="id-modal-ingredientes-produto" >PRODUTO INGREDIENTES</p>
                            </div>
                            <div class="col-md-3 my-auto">
                                <div class="my-3">
                                    <label for="id-modal-preco-produto">Preço Unitario:</label>
                                    <input id="id-modal-preco-produto" type="text" class="form-control" placeholder="Preço" value="R$ PREÇO" readonly>
                                </div>
                                <div class="my-3">
                                    
                                    <input type="number" class="form-control" id="id-modal-quant-produto" value="1" min="1">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="id-modal-btn-atualizar-produto" class="btn btn-success" data-bs-dismiss="modal"> <?php echo e(__('welcome_dashboards.btnUpdate')); ?> </a>
                </div>
            </div>
        </div>
    </div>

    <script src=<?php echo e(asset('js/pedidoUsuario.js')); ?>></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\iaguc\Desktop\IFSC\IFSC Projetos\Trabalhos\ProjetoAula2\resources\views/PedidoUsuario/index.blade.php ENDPATH**/ ?>