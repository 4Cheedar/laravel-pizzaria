<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
Use Illuminate\Support\Facades\Session;

class IdiomaController extends Controller
{
    public function trocaIdioma($idioma){
        App::setLocale($idioma);
        Session::put('idioma', $idioma);
        return back();
    }
}
