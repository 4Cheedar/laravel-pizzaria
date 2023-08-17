<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Closure;

class LanguageSwitcher
{
    public function handle($request, Closure $next){
        App::setLocale(Session::get('idioma', Config::get('app.locale')));
        return $next($request);
    }
}
?>