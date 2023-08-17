@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{$tipoProduto->id}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('welcome_dashboards.description') }}</label>
            <input type="text" class="form-control" value="{{$tipoProduto->descricao}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Updated_at</label>
            <input type="text" class="form-control" value="{{$tipoProduto->updated_at}}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Created_at</label>
            <input type="text" class="form-control" value="{{$tipoProduto->created_at}}" disabled>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{Route("tipoproduto.index")}}">{{ __('welcome_dashboards.btnBack') }}</a>
        </div>
    </div>
@endsection