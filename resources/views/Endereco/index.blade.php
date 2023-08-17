@extends('layouts.app')

@section('content')
    <div class="container">
        @if (isset($tipoMensagem) && isset($mensagem))
            <div class="alert alert-{{$tipoMensagem}} alert-dismissible fade show" role="alert">
                {{$mensagem}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a class="btn btn-primary" href="{{route("endereco.create")}}">{{ __('welcome_dashboards.btnCreateAdress') }}</a>
        <a class="btn btn-primary" href="{{route("home")}}">{{ __('welcome_dashboards.btnBack') }}</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    {{-- <th scope="col">Users_id</th> --}}
                    <th scope="col">{{ __('welcome_dashboards.itsDistrict') }}</th>
                    <th scope="col">{{ __('welcome_dashboards.itsPlace') }}</th>
                    <th scope="col">{{ __('welcome_dashboards.itsNumber') }}</th>
                    <th scope="col">{{ __('welcome_dashboards.itsComplement') }}</th>
                    <th scope="col">{{ __('welcome_dashboards.itsAction') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                    <tr> 
                        <th scope="row">{{$endereco->id}}</th>
                        {{-- <td>{{$endereco->Users_id}}</td> --}}
                        <td>{{$endereco->bairro}}</td>
                        <td>{{$endereco->logradouro}}</td>
                        <td>{{$endereco->numero}}</td>
                        <td>{{$endereco->complemento}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route("endereco.show", $endereco->id)}}">{{ __('welcome_dashboards.btnShow') }}</a>
                            <a class="btn btn-secondary" href="{{route("endereco.edit", $endereco->id)}}">{{ __('welcome_dashboards.btnEdit') }}</a>
                            <a href="#" class="btn btn-danger btn-remover" data-bs-toggle="modal" data-bs-target="#id-remove-modal" value="{{route("endereco.destroy", $endereco->id)}}">{{ __('welcome_dashboards.btnRemove') }}</a>
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
                        <button type="submit" class="btn btn-danger">{{ __('welcome_dashboards.btnRemove') }}</button>    
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