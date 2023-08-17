@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route("produto.store")}}">
          @csrf
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled>
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
            </div>
            <div class="mb-3">
              <label for="id-nome" class="form-label">{{ __('welcome_dashboards.nameUser') }}</label>
              <input name="nome" type="text" class="form-control" id="id-nome" placeholder="{{ __('welcome_dashboards.placeName') }}">
            </div>
            <div class="mb-3">
              <label for="id-preco" class="form-label">{{ __('welcome_dashboards.price') }}</label>
              <input name="preco" type="text" class="form-control" id="id-preco" placeholder="{{ __('welcome_dashboards.placePrice') }}">
            </div>
            <div class="mb-3">
                <label for="id-urlImage" class="form-label">Url Image</label>
                <input name="urlImage" type="text" class="form-control" id="id-urlImage" value="/img/default.png" placeholder="{{ __('welcome_dashboards.placeUrl') }}">
            </div>
            <div class="mb-3">
                <label for="id-ingredientes" class="form-label">{{ __('welcome_dashboards.itsIngredients') }}</label>
                <input name="ingredientes" type="text" class="form-control" id="id-ingredientes" placeholder="{{ __('welcome_dashboards.placeIngredients') }}">
            </div>
            <div class="mb-3">
              <label for="id-tipo" class="form-label">{{ __('welcome_dashboards.type') }}</label>
              <select name="Tipo_Produtos_id" class="form-select" aria-label="Default select example">
                @foreach ($tipoProdutos as $tipoProduto)
                  <option value="{{$tipoProduto->id}}">{{$tipoProduto->descricao}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('welcome_dashboards.btnSave') }}</button>
            <a href="{{route("produto.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
        </form>
    </div>
@endsection