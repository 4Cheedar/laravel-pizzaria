@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome_dashboards.dashboardAdmin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{route("Gerenciar")}}">{{ __('welcome_dashboards.btnRequest') }}</a>
                    <a class="btn btn-primary" href="{{route("produto.index")}}">{{ __('welcome_dashboards.btnProduct') }}</a>
                    <a class="btn btn-primary" href="{{route("tipoproduto.index")}}">{{ __('welcome_dashboards.btnTypeProduct') }}</a>
                    <a class="btn btn-primary" href="/">{{ __('welcome_dashboards.btnBack') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
