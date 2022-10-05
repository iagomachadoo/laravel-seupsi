<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SeuPsi</title>

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
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logo.svg')}}" alt="Seu.Psi">
                </a>

                <button class="header__btn-menu navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="header__menu navbar-nav mx-auto mb-2 mb-lg-0 fs-5">
                        <li class="nav-item">
                            <a class="header__menu-link nav-link active fw-bolder" aria-current="page" href="#">home</a>
                        </li>

                        <li class="nav-item">
                            <a class="header__menu-link nav-link fw-bolder" href="#">quem sou</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="header__menu-link nav-link dropdown-toggle d-flex align-items-center fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">temas</a>

                            <ul class="header__menu-dropdown dropdown-menu">
                                <li>
                                    <a class="header__link-dropdown dropdown-item fw-bolder" href="#">Ansiedade</a>
                                </li>

                                <li>
                                    <a class="header__link-dropdown dropdown-item fw-bolder" href="#">Depressão</a>
                                </li>

                                <li>
                                    <a class="header__link-dropdown dropdown-item fw-bolder" href="#">Luto</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item mb-lg-0 mb-3">
                            <a href="#" class="header__menu-link nav-link fw-bolder">mensagens</a>
                        </li>

                        <li class="nav-item d-lg-none d-block">
                            <span class="header__menu-footer d-block fw-bolder fs-6">Fellype Ferraz Pecly</span>
                            <span class="header__menu-footer d-block">Psicólogo Clínico | CRP - 05/67330</span>
                        </li>
                    </ul>
                </div>

                <div class="header__topo-diretira d-lg-block d-none">
                    <span class="header__texto-direita d-block fw-bolder fs-6">Fellype Ferraz Pecly</span>
                    <span class="header__texto-direita d-block">Psicólogo Clínico | CRP - 05/67330</span>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('conteudo')

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer__logo col-4">
                    <img src="{{asset('img/logo.svg')}}" alt="">
                </div>

                <div class="footer__contato col-4">
                    <ul>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <a href="tel:+5522998008300">(22) 9.9800-8300</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>