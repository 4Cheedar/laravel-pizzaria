@extends('layouts.app')

@section('content')
    <div class="container">
      <form method="POST" action="{{route("endereco.update", $endereco->id)}}">
          @csrf
          <input name="_method" type="hidden" value="PUT">
          <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled value="{{$endereco->id}}">
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
          </div>
          {{-- <div class="mb-3">
              <label for="id-Users_id" class="form-label">Users_id</label>
              <input name="Users_id" type="text" class="form-control" id="id-Users_id" placeholder="Digite Users_id" value="{{$endereco->Users_id}}">
          </div> --}}
          <div class="mb-3">
              <label for="id-bairro" class="form-label">{{ __('welcome_dashboards.itsDistrict') }}</label>
              <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="{{ __('welcome_dashboards.placeDistrict') }}" value="{{$endereco->bairro}}">
          </div>
          <div class="mb-3">
              <label for="id-logradouro" class="form-label">{{ __('welcome_dashboards.itsPlace') }}</label>
              <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="{{ __('welcome_dashboards.placePlace') }}" value="{{$endereco->logradouro}}">
          </div>
          <div class="mb-3">
              <label for="id-numero" class="form-label">{{ __('welcome_dashboards.itsNumber') }}</label>
              <input name="numero" type="text" class="form-control" id="id-numero" placeholder="{{ __('welcome_dashboards.placeNumber') }}" value="{{$endereco->numero}}">
          </div>
          <div class="mb-3">
              <label for="id-complemento" class="form-label">{{ __('welcome_dashboards.itsComplement') }}</label>
              <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="{{ __('welcome_dashboards.placeComplement') }}" value="{{$endereco->complemento}}">
          </div>
          <button type="submit" class="btn btn-primary">{{ __('welcome_dashboards.btnSave') }}</button>
          <a href="{{route("endereco.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
      </form>
    </div>
@endsection