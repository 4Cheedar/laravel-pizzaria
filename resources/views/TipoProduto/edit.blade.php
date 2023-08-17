@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route("tipoproduto.update", $tipoProduto->id)}}">
          @csrf
          <input name="_method" type="hidden" value="PUT">
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" value="{{$tipoProduto->id}}" disabled>
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
            </div>
            <div class="mb-3">
              <label for="id-descricao" class="form-label">{{ __('welcome_dashboards.description') }}</label>
              <input name="descricao" type="text" class="form-control" id="id-descricao" value="{{$tipoProduto->descricao}}" placeholder="{{ __('welcome_dashboards.placeDescription') }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('welcome_dashboards.btnSave') }}</button>
            <a href="{{route("tipoproduto.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
        </form>
    </div>
@endsection