@extends('layouts.app')

@section('style')
    <script src="https://kit.fontawesome.com/861689887d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png"
          sizes="180x180">

    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
          color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
@endsection

@section('content')
    <x-header />
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white navbar-style" style="width: 280px;">
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="{{}}" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"/>
                        </svg>
                        Мои доски
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"/>
                        </svg>
                        Мои задачи
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"/>
                        </svg>
                        Мои группы
                    </a>
                </li>
            </ul>
            <hr>
            <div class="nav-item">
                <a class="exit" href="#"><i class="fas fa-sign-out-alt"></i> Выход</a>
            </div>
        </div>
        <div class="content container-fluid d-flex flex-column ">
            <div class="block d-flex flex-wrap row">

                <div class="card  col-xs-6 col-xl-7  m-sm-2 m-xl-3">
                    <div class="bigBlock card-body ">
                        <div class="title">
                            <p>Успехи за неделю</p>
                            <i class="fas fa-ellipsis-h"></i>
                        </div>

                        <div class="radius">
                            <div class="radiusBlock">
                                <p>Создано</p>
                                <div>
                                    <p>197 задач</p>
                                </div>
                            </div>

                            <div class="radiusBlock">
                                <p>Выполнено</p>
                                <div>
                                    <p>197 задач</p>
                                </div>
                            </div>

                            <div class="radiusBlock">
                                <p>Выполнено</p>
                                <div>
                                    <p>197 задач</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="card  col-xs-6 col-xl-4 m-sm-2 m-xl-3">
                    <div class="bigBlock card-body">
                        <div class="title">
                            <p>Дата и время</p>
                            <i class="fas fa-ellipsis-h"></i>
                        </div>

                        <div>
                            <div class="date">
                                28 июля 2020 16:30
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-100"></div>

                <div class="card col-xs-6 col-xl-7 m-sm-2 m-xl-3">
                    <div class="bigBlock card-body ">
                        <div class="title">
                            <p>Активные задачи</p>
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <div class="tusks">

                            <!-- здесь откручиваем задачи, стилистику настрою  -->
                            <div class="tusk">
                                <label>
                                    <input type="radio" class="radio" name="bubu" checked>
                                    <span class="pseudo-radio"></span>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    <input type="radio" class="radio" name="bubu" checked>
                                    <span class="pseudo-radio"></span>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    <input type="radio" class="radio" name="bubu" checked>
                                    <span class="pseudo-radio"></span>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    <input type="radio" class="radio" name="bubu" checked>
                                    <span class="pseudo-radio"></span>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card col-xs-6 col-xl-4 m-sm-2 m-xl-3">
                    <div class="bigBlock card-body">

                        <div class="title">
                            <p>Завершенные задачи</p>
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <div class="tusks">
                            <div class="tusk">
                                <label>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                            <div class="tusk">
                                <label>
                                    Приготовить ужин
                                </label>
                                <div>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>
    </main>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush


