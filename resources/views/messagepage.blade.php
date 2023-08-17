@extends('layouts.app')

@section('content')
    <div class="container">
        <p>{{$message}}</p>
        <a class="btn btn-primary" href="/">{{ __('welcome_dashboards.btnHome') }}</a>
        <a class="btn btn-primary" href="{{URL::previous()}}">{{ __('welcome_dashboards.btnBack') }}</a>
    </div>
</body>
</html>
