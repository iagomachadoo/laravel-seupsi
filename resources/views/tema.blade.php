@extends('template.template')

@section('conteudo')
    <h1>Notas sobre {{ $temas->nome}}</h1>
    <picture>
        <img src="{{ asset('img/temas/capa/' . $temas->slug . '-capa.png') }}" alt="">
    </picture>
    <ul>
        @forelse ($conteudos as $conteudo)
        {{-- {{dd($conteudo)}} --}}
        <li>{{$conteudo}}</li>
        @empty
            
        @endforelse
    </ul>
@endsection