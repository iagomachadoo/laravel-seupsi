<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SeuPsi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/app-responsivo.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <!--Header-->
    <header class="header py-4">
        <nav class="navbar navbar-expand-lg">
            <div class="container px-3">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{asset('img/logo.svg')}}" alt="Seu.Psi">
                </a>

                <button class="header__btn-menu navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="header__menu navbar-nav mx-auto mb-2 mb-lg-0 fs-5">
                        <li class="nav-item">
                            <a class="header__menu-link font-s-b nav-link active" aria-current="page" href="{{ route('index') }}">home</a>
                        </li>

                        <li class="nav-item">
                            <a class="header__menu-link font-s-b nav-link" href="{{ route('quem-sou') }}">quem sou</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="header__menu-link font-s-b nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">temas</a>

                            <ul class="header__menu-dropdown dropdown-menu">
                                <li>
                                    <a class="header__link-dropdown font-s-b dropdown-item" href="#">Ansiedade</a>
                                </li>

                                <li>
                                    <a class="header__link-dropdown font-s-b dropdown-item" href="#">Depressão</a>
                                </li>

                                <li>
                                    <a class="header__link-dropdown font-s-b dropdown-item" href="#">Luto</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item mb-lg-0 mb-3">
                            <a href="{{ route('mensagens')}}" class="header__menu-link font-s-b nav-link">mensagens</a>
                        </li>

                        <li class="nav-item d-lg-none d-block">
                            <span class="header__menu-footer font-xs d-block">Fellype Ferraz Pecly</span>
                            <span class="header__menu-footer font-xs">Psicólogo Clínico | CRP - 05/67330</span>
                        </li>
                    </ul>
                </div>

                <div class="header__topo-diretira d-lg-block d-none">
                    <span class="header__texto-direita font-xs d-block">Fellype Ferraz Pecly</span>
                    <span class="header__texto-direita font-xs">Psicólogo Clínico | CRP - 05/67330</span>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('conteudo')

    <footer class="footer">
        <div class="container px-3 py-5">
            <div class="row">
                <div class="footer__logo col-lg-4 mb-lg-0 mb-5">
                    <img src="{{asset('img/logo.svg')}}" alt="SeuPsi">
                </div>

                <div class="footer__contato col-lg-4 col-md-6 mb-md-0 mb-5">
                    <span class="footer__contato-titulo font-l d-block mb-2">Contatos</span>
                    <ul class="footer__contato-lista ps-0">
                        <li class="footer__contato-item mb-3 mt-1">
                            <i class="bi bi-whatsapp footer__contato-icone me-1"></i>
                            <a href="tel:+5522998008300" class="footer__contato-link font-s ms-1">(22) 9.9800-8300</a>
                        </li>
                        <li class="footer__contato-item mb-3">
                            <i class="bi bi-envelope footer__contato-icone me-1"></i>
                            <a href="mailto:fellype.pecly@gmail.com" class="footer__contato-link font-s ms-1">fellype.pecly@gmail.com</a>
                        </li>
                        <li class="footer__contato-item mb-3">
                            <i class="bi bi-instagram footer__contato-icone me-1"></i>
                            <a href="#" class="footer__contato-link font-s ms-1">@seu.psi</a>
                        </li>
                        <li class="footer__contato-item">
                            <i class="bi bi-tiktok footer__contato-icone me-1"></i>
                            <a href="#" class="footer__contato-link font-s ms-1">seu.psi</a>
                        </li>
                    </ul>
                </div>

                <div class="footer_menu-sec col-lg-4 col-md-6 d-flex justify-content-md-center">
                    <ul class="footer__menu-sec-lista mb-0 ps-0">
                        <li class="footer__menu-sec-item mb-3">
                            <a href="#" class="footer__menu-sec-link font-m-b">início</a>
                        </li>
                        <li class="footer__menu-sec-item mb-3">
                            <a href="#" class="footer__menu-sec-link font-m-b">quem sou</a>
                        </li>
                        <li class="footer__menu-sec-item dropdown mb-3">
                            <a href="#" class="footer__menu-sec-link font-m-b dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">temas</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item font-m-b" href="#">Ansiedade</a>
                                </li>
                                <li>
                                    <a class="dropdown-item font-m-b" href="#">Depressão</a>
                                </li>
                                <li>
                                    <a class="dropdown-item font-m-b" href="#">Luto</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer__menu-sec-item mb-3">
                            <a href="#" class="footer__menu-sec-link font-m-b">mensagens</a>
                        </li>
                        <li class="footer__menu-sec-item">
                            <a href="#" class="footer__menu-sec-link font-m-b">termos e condições</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__roda-pe">
            <div class="container px-3 py-3">
                <div class="row">
                    <div class="footer__copy col-md-6 d-flex justify-content-center">
                        <i class="bi bi-c-circle footer__copy-icone me-2"></i>
                        <p class="footer__direitos mb-md-0">SeuPsi - Todos os direitos reservados - 2022</p>
                    </div>

                    <div class="footer__dev col-md-6">
                        <p class="footer__dev-nome m-0 text-center">Site por <a href="#" class="footer__dev-link">Iago Machado</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            @if (session('error') || session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">OK</button>
        </div>
        </div>
    </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @if (session('error') || session('errors') || session('success'))
        <script>
            var modalMensagem = new bootstrap.Modal(document.getElementById('exampleModalCenter'));
            modalMensagem.show();
        </script>
    @endif
    
</body>
</html>