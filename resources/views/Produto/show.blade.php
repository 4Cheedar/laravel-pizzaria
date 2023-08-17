@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{$produto->id}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('welcome_dashboards.nameUser') }}</label>
            <input type="text" class="form-control" value="{{$produto->nome}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('welcome_dashboards.price') }}</label>
            <input type="text" class="form-control" value="{{$produto->preco}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Url Image</label>
            <input type="text" class="form-control" value="{{$produto->urlImage}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('welcome_dashboards.itsIngredients') }}</label>
            <input type="text" class="form-control" value="{{$produto->ingredientes}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('welcome_dashboards.type') }}</label>
            <input type="text" class="form-control" value="{{$produto->descricao}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Updated_at</label>
            <input type="text" class="form-control" value="{{$produto->updated_at}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Created_at</label>
            <input type="text" class="form-control" value="{{$produto->created_at}}" disabled>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{Route("produto.index")}}">{{ __('welcome_dashboards.btnBack') }}</a>
        </div>
    </div>
@endsection