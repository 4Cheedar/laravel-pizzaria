@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome_dashboards.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{route("endereco.index")}}">{{ __('welcome_dashboards.btnAdress') }}</a>
                    <a class="btn btn-primary" href="{{route("pedido.usuario.index")}}">{{ __('welcome_dashboards.btnRequest') }}</a>
                    <a class="btn btn-primary" href="/">{{ __('welcome_dashboards.btnBack') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
