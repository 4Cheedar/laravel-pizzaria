@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route("endereco.store")}}">
          @csrf
            <div class="mb-3">
              <label for="id-input" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input" aria-describedby="id-help" placeholder="#" disabled>
              <div id="id-help" class="form-text">{{ __('welcome_dashboards.placeId') }}</div>
            </div>
            <div class="mb-3">
                <label for="id-bairro" class="form-label">{{ __('welcome_dashboards.itsDistrict') }}</label>
                <input name="bairro" type="text" class="form-control" id="id-bairro" placeholder="{{ __('welcome_dashboards.placeDistrict') }}">
            </div>
            <div class="mb-3">
                <label for="id-logradouro" class="form-label">{{ __('welcome_dashboards.itsPlace') }}</label>
                <input name="logradouro" type="text" class="form-control" id="id-logradouro" placeholder="{{ __('welcome_dashboards.placePlace') }}">
            </div>
            <div class="mb-3">
                <label for="id-numero" class="form-label">{{ __('welcome_dashboards.itsNumber') }}</label>
                <input name="numero" type="text" class="form-control" id="id-numero" placeholder="{{ __('welcome_dashboards.placeNumber') }}">
            </div>
            <div class="mb-3">
                <label for="id-complemento" class="form-label">{{ __('welcome_dashboards.itsComplement') }}</label>
                <input name="complemento" type="text" class="form-control" id="id-complemento" placeholder="{{ __('welcome_dashboards.placeComplement') }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('welcome_dashboards.btnSave') }}</button>
            <a href="{{route("endereco.index")}}" class="btn btn-primary">{{ __('welcome_dashboards.btnBack') }}</a>
        </form>
    </div>
@endsection