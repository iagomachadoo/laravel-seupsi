<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SeuPsi</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!--Header-->
    <header class="header py-4 bg-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">seu.psi</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">quem sou</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">temas</a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link">mensagens</a>
                        </li>

                        <li class="nav-item d-lg-none d-block">
                            <span class="d-block">Fellype Ferraz Pecly</span>
                            <span class="d-block">Psicólogo Clínico | CRP - 05/67330</span>
                        </li>
                    </ul>
                </div>

                <div class="header__topo-diretira d-lg-block d-none">
                    <span class="d-block">Fellype Ferraz Pecly</span>
                    <span class="d-block">Psicólogo Clínico | CRP - 05/67330</span>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('conteudo')

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>