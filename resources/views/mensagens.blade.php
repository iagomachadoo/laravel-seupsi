@extends('template.template')

@section('conteudo')
    <div class="container py-5">
        <h1 class="form-mensagen__titulo font-xl mb-5">Caixe de mensagens.</h1>
        <form action="{{ route('mensagens-post') }}" method="post">
            @csrf
            <div class="form_mensagem__campo d-flex flex-column mb-4">
                <label for="idade" class="font-s-b mb-2">Idade</label>
                <input type="number" name="idade" id="idade" value="{{old('idade')}}" required maxlength="3" class="form_mensagem__input py-1 px-2">
            </div>
            <div class="form_mensagem__campo d-flex flex-column mb-4">
                <label for="cidade" class="font-s-b mb-2">Cidade</label>
                <input type="text" name="cidade" id="cidade" value="{{old('cidade')}}" required maxlength="60" class="form_mensagem__input py-1 px-2">
            </div>
            <div class="form_mensagem__campo d-flex flex-column mb-4">
                <label for="estado" class="font-s-b mb-2">UF</label>
                <input type="text" name="estado" id="estado" value="{{old('estado')}}" required maxlength="60" class="form_mensagem__input py-1 px-2">
            </div>
            <div class="form_mensagem__campo d-flex flex-column mb-4">
                <label for="mensagem" class="font-s-b mb-2">Mensagem</label>
                <textarea name="mensagem" id="mensagem" cols="60" rows="10" maxlength="350" required class="mb-1 py-1 px-2 form_mensagem__text-area"></textarea>
                <span class="d-block font-xs form_mensagem__limite-caracter">Limite de 350 caracteres: restam <span class="form_mensagem__qtd-caractere">350</span></span>
            </div>
            <button type="submit" class="font-s-b btn-padrao border border-0">enviar mensagem</button>
        </form>
    </div>

@endsection