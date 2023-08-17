@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
          @csrf
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" value="{{$endereco->id}}" disabled>
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
            </div>
            <div class="mb-3">
              <label for="id-Users_id" class="form-label">Users_id</label>
              <input name="Users_id" type="text" class="form-control" id="id-Users_id" placeholder="Digite Users_id" value="{{$endereco->Users_id}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-bairro" class="form-label">{{ __('welcome_dashboards.itsDistrict') }}</label>
                <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="Digite bairro" value="{{$endereco->bairro}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-logradouro" class="form-label">{{ __('welcome_dashboards.itsPlace') }}</label>
                <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="Digite o logradouro" value="{{$endereco->logradouro}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-numero" class="form-label">{{ __('welcome_dashboards.itsNumber') }}</label>
                <input name="numero" type="text" class="form-control" id="id-numero" placeholder="Digite o numero" value="{{$endereco->numero}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">{{ __('welcome_dashboards.itsComplement') }}</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="{{$endereco->complemento}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">Updated_at</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="{{$endereco->updated_at}}" disabled>
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">Created_at</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="Digite o complemento" value="{{$endereco->created_at}}" disabled>
            </div>
            <a href="{{route("endereco.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
        </form>
    </div>
@endsection