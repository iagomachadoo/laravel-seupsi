<?php

namespace App\Http\Controllers;

use App\Models\Depoimento;
use App\Models\Duvidas;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $duvidas = Duvidas::all();
        $depoimentos = Depoimento::get()->sortBy('id');
        
        return view('index', compact('duvidas', 'depoimentos'));
    }

    public function quemSou()
    {
        return view('quem-sou');
    }

    public function mensagens()
    {
        return view('mensagens');
    }

    public function mensagensPost(Request $request)
    {
        $request->validate([
            'idade' => 'required|max:3',
            'cidade' => 'required|max:60',
            'mensagem' => 'required|max:350'
        ]);

        $dados = $request->all();
        Depoimento::created($dados);

        return redirect()->back();
    }
}
