@extends('template.template')

@section('conteudo')
    <section class="banner">
        <img src="{{asset('img/banner/intro.webp')}}" class="img-fluid banner__img" alt="SeuPsi">
    </section>

    <section class="atendimento">
        <div class="container px-3 py-5">
            <h1 class="atendimento__titulo font-xl mb-3">Como faço para marcar um <br> atendimento?</h1>
            <h2 class="atendimento__sub-titulo font-l pt-1 mb-5">Segue abaixo algumas opções de contato.</h2>
            <ul class="atendimento__lista row pt-3 px-0">
                <li class="atendimento__item col-lg-4 col-sm-6 d-flex justify-content-center flex-column mb-lg-0 mb-5">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-whatsapp atendimento__icone font-xl"></i>
                    </div>
                    <a href="https://wa.me/+5522998008300" class="d-block pt-1 text-center atendimento__link font-m">(22) 9.9800-8300</a>
                </li>

                <li class="atendimento__item col-lg-4 col-sm-6 d-flex justify-content-center flex-column mb-lg-0 mb-5">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-instagram atendimento__icone font-xl"></i>
                    </div>
                    <a href="#" class="d-block pt-1 text-center atendimento__link font-m">@seu.psi</a>
                </li>

                <li class="atendimento__item col-lg-4 d-flex justify-content-center flex-column">
                    <div class="atendimento__meio-comunic d-flex justify-content-center align-items-center mb-3 mx-auto">
                        <i class="bi bi-envelope atendimento__icone font-xl"></i>
                    </div>
                    <a href="mailto:fellype.pecly@gmail.com" class="d-block pt-1 text-center atendimento__link font-m">fellype.pecly@gmail.com</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="duvidas">
        <div class="container px-3 py-5">
            <h2 class="duvidas__titulo font-xl mb-4">Perguntas frequentes.</h2>
            <ul class="duvidas__accordion accordion pt-2 px-0" id="accordionExample">
                @foreach ($duvidas as $duvida)
                    <li class="accordion-item mb-4 rounded-2">
                        <h3 class="accordion-header" id="{{ 'heading' . $loop->index }}">
                            <button class="accordion-button duvidas__accordion-button font-m" type="button" data-bs-toggle="collapse" data-bs-target="{{'#collapse' . $loop->index}}" aria-expanded="{{ $loop->index ? 'false' : 'true'}}" aria-controls="{{ 'collapse' . $loop->index}}">
                                {{ $duvida->pergunta}}
                            </button>
                        </h3>
                        <div id="{{ 'collapse' . $loop->index }}" class="accordion-collapse collapse {{ $loop->index ? '' : 'show'}}" aria-labelledby="{{ 'heading' . $loop->index }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body duvidas__accordion-body font-s">
                                {{ $duvida->resposta}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="sobre">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center order-lg-1 order-2 sobre__conteudo">
                    <h2 class="mb-4 sobre__titulo font-xl">Conheça o Fellype.</h2>
                    <p class="mb-4 sobre__resumo font-m">Graduado em psicologia pela Universidade Federal Fluminense, tracei um percurso de formação que me convocou para trabalhar uma escuta sensível, ética e não excludente, que acolhe o sofrimento psíquico através da ótica da psicanálise e ajuda a construir uma clínica que vai para além do setting analítico tradicional.</p>
                    @component('components.btn-padrao')
                        @slot('url')
                            {{ route('quem-sou') }}
                        @endslot
                        @slot('texto')
                            saiba mais
                        @endslot
                    @endcomponent
                </div>
                <picture class="d-flex col-lg-5 order-lg-2 order-1 mb-lg-0 mb-5">
                    <source media="(min-width: 992px)" srcset="{{ asset('img/sobre/img-perfil-lg.webp')}}">
                    <source media="(min-width: 576px)" srcset="{{ asset('img/sobre/img-perfil-sm.webp')}}">
                    <img src="{{ asset('img/sobre/img-perfil-auto.webp')}}" alt="Fellype Ferraz Pecly" class="mx-auto img-fluid">
                </picture>
            </div>
        </div>
    </section>

    <section class="temas">
        <div class="container py-5">
            <h2 class="font-xl mb-5">Temas.</h2>
            <div class="glider-contain">
                <ul class="glider px-0">
                    @forelse ($temas as $tema)
                        <li class="temas__card p-xl-4 p-3 me-3 d-flex flex-column align-items-center">
                            <picture>
                                <source media="(min-width: )" srcset="">
                                <img src="{{ asset('img/temas/' . $tema->slug . '-xl.webp') }}" alt="" class="d-block mb-4">
                            </picture>
                            <a href="{{ route('tema', $tema->slug) }}" class="font-l-b d-inline-block text-capitalize">{{ $tema->nome }}</a>
                        </li>
                    @empty
                        <p>A variável tema não existe</p>
                    @endforelse
                </ul>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>

    <section class="mensagens">
        <div class="container py-5">
            <h2 class="mb-3 mensagens__titulo font-xl">Caixa de mensagens.</h2>
            <p class="mb-5 mensagens__info font-m">Esse espaço é reservado para dúvidas, curiosidades, desabafos, depoimentos, comentários e o que mais acharem necessário. A opção para colocar seu nome não foi ativada para que a sua identidade fosse preservada. Já as opções de idade e cidade estão disponíveis apenas para tornar a troca menos mecanizada e mais real. Grato desde já pela interação.</p>
            <div class="mensagens__conteudo">
                <picture class="d-flex mb-4">
                    <source media="(min-width: 992px)" srcset="{{ asset('img/mensagens/depoimentos-lg.webp')}}">
                    <source media="(min-width: 576px)" srcset="{{ asset('img/mensagens/depoimentos-sm.webp')}}">
                    <img src="{{ asset('img/mensagens/depoimentos-auto.webp')}}" alt="Balão de pensamento" class="mx-auto">
                </picture>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <ul class="carousel-indicators mensagens__corousel-lista mx-auto p-1 justify-content-start">
                        @foreach ($depoimentos as $depoimento)
                            <li>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" class="{{$loop->index ? '' : 'active'}} mensagens__btn" aria-current="{{$loop->index ? '' : 'true'}}" aria-label="{{'Slide' . $loop->index}}"></button>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="carousel-inner p-0">
                        @foreach ($depoimentos as $depoimento)
                            <li class="carousel-item {{$loop->index ? '' : 'active'}}">
                                <h3 class="text-center mb-4 mensagens__carousel-titulo font-m">{{$depoimento->idade . ' anos - ' . $depoimento->cidade . '/' . $depoimento->estado}}</h3>
                                <p class="text-center mx-auto mb-5 mensagens__carousel-texto font-s">{{$depoimento->mensagem}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="{{ route('mensagens') }}" class="mensagens__link font-s-b mt-5 pt-5 d-inline-block">deixe sua mensagem</a>
        </div>
    </section>
@endsection