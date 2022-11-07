<?php

namespace App\Http\Controllers;

use App\Models\ConteudoPerfil;
use App\Models\Duvidas;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $duvidas = Duvidas::all();
        $conteudosPerfil = ConteudoPerfil::all();

        return view('index', compact('duvidas', 'conteudosPerfil'));
    }
}
