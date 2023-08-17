@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{route("tipoproduto.create")}}">{{ __('welcome_dashboards.btnCreateTypeProduct') }}</a>
        <a class="btn btn-primary" href="{{route("admin.dashboard")}}">{{ __('welcome_dashboards.btnBack') }}</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">{{ __('welcome_dashboards.description') }}</th>
                    <th scope="col">{{ __('welcome_dashboards.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoProdutos as $tipoProduto)
                    <tr>
                        <th scope="row">{{$tipoProduto->id}}</th>
                        <td>{{$tipoProduto->descricao}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route("tipoproduto.show", $tipoProduto->id)}}">{{ __('welcome_dashboards.btnShow') }}</a>
                            <a class="btn btn-secondary" href="{{route("tipoproduto.edit", $tipoProduto->id)}}">{{ __('welcome_dashboards.btnEdit') }}</a>
                            <a href="#" class="btn btn-danger btn-remover" data-bs-toggle="modal" data-bs-target="#id-remove-modal" value="{{route("tipoproduto.destroy", $tipoProduto->id)}}">{{ __('welcome_dashboards.btnRemove') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="id-remove-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('welcome_dashboards.modalRmResource') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                {{ __('welcome_dashboards.modalRemove') }}
                </div>
                <div class="modal-footer">
                    <form id="id-modal-form-delete" method="POST" action="" class="d-inline">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger"> {{ __('welcome_dashboards.btnRemove') }}</button>    
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
@endsection