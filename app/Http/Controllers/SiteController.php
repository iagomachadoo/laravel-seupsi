<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use App\Models\Depoimento;
use App\Models\Duvidas;
use App\Models\Tema;
use Exception;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $duvidas = Duvidas::all();
        $depoimentos = Depoimento::get()->sortByDesc('id');
        $temas = Tema::get()->sortBy('id');
        //dd($temas);

        return view('index', compact('duvidas', 'depoimentos', 'temas'));
    }

    public function quemSou()
    {
        $temas = Tema::get()->sortBy('id');

        return view('quem-sou',  compact('temas'));
    }

    public function mensagens()
    {
        $temas = Tema::get()->sortBy('id');

        return view('mensagens', compact('temas'));
    }

    public function mensagensPost(Request $request)
    {
        $request->validate([
            'idade' => 'required|numeric|min:0|max:120',
            'cidade' => 'required|alpha|max:60',
            'estado' => 'required|alpha|max:2',
            'mensagem' => 'required|max:350'
        ]);

        $dados = $request->all();
        Depoimento::create($dados);

        try {
            return redirect()->back()->with('success', 'Mensagem enviada com sucesso, obrigado!');
            
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Erro ao enviar mensagem, por favor tente novamente mais tarde.');
        }
    }

    public function temasConteudos($tema)
    {
        $temas = Tema::where('slug', $tema)->first();
        $conteudos = $temas->temaTemConteudos->all();
        //dd($conteudos);
        return view('tema', compact('temas', 'conteudos'));
    }

    /* public function conteudo($tema, $conteudo)
    {
        $temas = Tema::where('slug', $tema)->first();
        $conteudos = Conteudo::where('slug', $conteudo)->first();
        dd($conteudos);
        return view('conteudo', compact('temas', 'conteudos'));
    } */
}
