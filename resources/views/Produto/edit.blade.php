@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route("produto.update", $produto->id)}}">
          @csrf
          <input name="_method" type="hidden" value="PUT">
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" value="{{$produto->id}}" disabled>
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
            </div>
            <div class="mb-3">
              <label for="id-nome" class="form-label">{{ __('welcome_dashboards.nameUser') }}</label>
              <input name="nome" type="text" class="form-control" id="id-nome" placeholder="{{ __('welcome_dashboards.placeName') }}" value="{{$produto->nome}}">
            </div>
            <div class="mb-3">
                <label for="id-preco" class="form-label">{{ __('welcome_dashboards.price') }}</label>
                <input name="preco" type="text" class="form-control" id="id-preco" placeholder="{{ __('welcome_dashboards.placePrice') }}" value="{{$produto->preco}}">
              </div>
              <div class="mb-3">
                <label for="id-urlImage" class="form-label">Url Image</label>
                <input name="urlImage" type="text" class="form-control" id="id-urlImage" value="/img/default.png" placeholder="{{ __('welcome_dashboards.placeUrl') }}" value="{{$produto->urlImage}}">
            </div>
            <div class="mb-3">
                <label for="id-ingredientes" class="form-label">{{ __('welcome_dashboards.itsIngredients') }}</label>
                <input name="ingredientes" type="text" class="form-control" id="id-ingredientes" placeholder="{{ __('welcome_dashboards.placeIngredients') }}" value="{{$produto->ingredientes}}">
            </div>
              <div class="mb-3">
                <label for="id-tipo" class="form-label">{{ __('welcome_dashboards.type') }}</label>
                <select name="Tipo_Produtos_id" class="form-select" aria-label="Default select example">
                  @foreach ($tipoProdutos as $tipoProduto)
                    {{-- Se o valor que eu estiver imprimindo for igual ao valor dentro de $produto->Tipo_Produtos_id 
                        então será o selecionado --}}
                    @if ($tipoProduto->id == $produto->Tipo_Produtos_id)
                        <option value="{{$tipoProduto->id}}" selected>{{$tipoProduto->descricao}}</option>
                    @else    
                        <option value="{{$tipoProduto->id}}">{{$tipoProduto->descricao}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">{{ __('welcome_dashboards.btnSave') }}</button>
            <a href="{{route("produto.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
        </form>
    </div>
@endsection