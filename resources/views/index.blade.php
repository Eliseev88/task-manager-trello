<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>Kanban</title>
</head>
<body class="font-montserrat-alternate bg-dark">
    <div class="container-fluid color__bg-nav">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white font-size__brand" href="#">
                    <img src="storage/index_page/Vector.svg" alt="brand" width="41" height="35" class="mr-2">
                    Kanban
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    @if (Route::has('login'))
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @auth
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white font-size__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right color__bg-nav text-white" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item font-size__link text-white" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item font-size__link text-white" href="account">Account</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item mr-4">
                                    <a href="{{ route('login') }}" class="text-white font-size__link">Войти</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="text-white font-size__link">Регистрация</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <div class="container text-white">
        <div class="margin__content align-items-center d-flex flex-wrap justify-content-center">
            <div class="width__content-left">
                <div>
                    <h1 class="font-montserrat-subrayada font-size__content mb-2">KANBAN</h1>
                    <p class="font-montserrat font-size__paragraph margin__bott">Идеальное пространство для самых разных задач. Место для тех кто любит планировать свое время</p>
                    <a href="board" class="font-montserrat font-size__paragraph content-link margin__bott">Начните прямо сейчас</a>
                </div>
            </div>
            <div class="text-center width__content-right">
                <img src="storage/index_page/feature-3.png" class="img-fluid" width="80%">
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
