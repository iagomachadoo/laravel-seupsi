@extends('template.template')

@section('conteudo')
    <section class="banner">
        <img src="{{asset('img/banner/intro.webp')}}" class="w-100 banner__img" alt="SeuPsi">
    </section>

    <section class="atendimento">
        <div class="container px-3 py-5">
            <h1 class="atendimento__titulo mb-3">Como faço para marcar um <br> atendimento?</h1>
            <h2 class="atendimento__sub-titulo pt-1 mb-5">Segue abaixo algumas opções de contato.</h2>
            <ul class="atendimento__lista d-flex justify-content-around align-items-center pt-3">
                <li class="atendimento__item d-flex justify-content-center flex-column">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-whatsapp atendimento__icone"></i>
                    </div>
                    <a href="tel:+5522998008300" class="d-block pt-1 text-center atendimento__link">(22) 9.9800-8300</a>
                </li>
                <li class="atendimento__item d-flex justify-content-center flex-column">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-instagram atendimento__icone"></i>
                    </div>
                    <a href="#" class="d-block pt-1 text-center atendimento__link">seu.psi</a>
                </li>
                <li class="atendimento__item d-flex justify-content-center flex-column">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-envelope atendimento__icone"></i>
                    </div>
                    <a href="mailto:fellype.pecly@gmail.com" class="d-block pt-1 text-center atendimento__link">fellype.pecly@gmail.com</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="duvidas">
        <div class="container px-3 py-5">
            <h2 class="duvidas__titulo mb-4">Perguntas frequentes.</h2>
            <ul class="duvidas__accordion accordion pt-2 px-0" id="accordionExample">
                @foreach ($duvidas as $duvida)
                    <li class="accordion-item mb-4 rounded-2">
                        <h3 class="accordion-header" id="{{ 'heading' . $loop->index }}">
                            <button class="accordion-button duvidas__accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="{{'#collapse' . $loop->index}}" aria-expanded="{{ $loop->index ? 'false' : 'true'}}" aria-controls="{{ 'collapse' . $loop->index}}">
                                {{ $duvida->pergunta}}
                            </button>
                        </h3>
                        <div id="{{ 'collapse' . $loop->index }}" class="accordion-collapse collapse {{ $loop->index ? '' : 'show'}}" aria-labelledby="{{ 'heading' . $loop->index }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body duvidas__accordion-body">
                                {{ $duvida->resposta}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="sobre">
        <div class="container px-3">
            @foreach ($conteudosPerfil as $conteudoPerfil)
                <div class="row">
                    <div class="sobre__left col-6 d-flex flex-column justify-content-center">
                        <h2 class="sobre__titulo mb-4">{{ $conteudoPerfil->titulo }}</h2>
                        <p class="sobre__resumo mb-5">{{ $conteudoPerfil->resumo }}</p>
                        <a href="" class="sobre__btn">saiba mais</a>
                    </div>
                    <div class="sobre__right col-6 d-flex">
                        <picture class="ms-auto">
                            <source media="(max-width: 1200px)" srcset="{{ asset( 'img/sobre/' . $conteudoPerfil->img . '-2.webp')}}">

                            <img src="{{ asset( 'img/sobre/' . $conteudoPerfil->img . '.webp')}}" alt="Fellype Ferraz" class="sobre__img img-fluid border border-dark">
                        </picture>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection