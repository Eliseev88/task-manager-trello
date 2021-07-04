<div class="container-fluid color__bg-nav">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white font-size__brand" href="/">
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
                            <li class="nav-item dropdown d-flex align-items-center">
                                <img src="https://github.com/mdo.png" alt="" width="35" height="35" class="rounded-circle me-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white font-size__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right color__bg-nav text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item font-size__link text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                    <a class="dropdown-item font-size__link text-white" href="account">Аккаунт</a>

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
